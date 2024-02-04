<?php

namespace App\Http\Controllers;

use App\Models\BookedFlight;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserFlightsController extends Controller
{
    /**
     * Exhibits a listing of current user's booked flights
     * @return [type]
     */
    public function index() {

        $flights = Flight::whereHas('bookedFlights', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->get();

        return view('user.flights', ['flights' => $flights]);
    }

    /**
     * Books a new flight for the current user.
     * @param Flight $flight
     *
     * @return [type]
     */
    public function store(Flight $flight) {
        try {
            DB::table('booked_flights')->insert([
                'user_id' => auth()->user()->id,
                'flight_id' => $flight->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect()->route('user.flights')->with('message', 'Your flight was booked successfully!');
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage(), $ex->getCode());
        }
    }

    /**
     * Unbooks a flight for current user
     * @param Flight $flight
     *
     * @return [type]
     */
    public function destroy(Flight $flight) {
        try {
            DB::table('booked_flights')->where('flight_id', $flight->id)->delete();

            return redirect()->route('user.flights')->with('message', 'Your flight was unbooked.');
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage(), $ex->getCode());
        }
    }
}
