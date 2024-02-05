<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class FlightsController extends Controller
{
    public function index() {
        $flights = Flight::query();

        $flights = $flights->paginate(10);
        return view('flights.index', compact('flights'))->with('title','All Flights');
    }

    public function cheapest()
    {
        $flights = Flight::where('ticket_price', '<=', 1500)
            ->orderBy('ticket_price', 'asc')
            ->paginate(10);

        return view('flights.index', compact('flights'))->with('title','Cheapest Flights');
    }

    public function show(Flight $flight) {
        return view('flights.show', ['flight' => $flight]);
    }
}
