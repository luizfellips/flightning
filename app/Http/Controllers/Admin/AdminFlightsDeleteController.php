<?php

namespace App\Http\Controllers\Admin;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminFlightsDeleteController extends Controller
{
    public function index()
    {
        $flights = Flight::query()->paginate(10);

        return view('admin.flights.listings', compact('flights'))->with([
            'title' =>  'Delete a flight',
            'targetRoute' => 'admin.flights.delete.confirm',
        ]);
    }

    public function confirm(Flight $flight) {
        return view('admin.flights.delete', compact('flight'));
    }
}
