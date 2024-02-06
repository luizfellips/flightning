<?php

namespace App\Http\Controllers\Admin;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowAdminFlightsEditListController extends Controller
{
    public function __invoke() {
        $flights = Flight::query()->paginate(10);

        return view('admin.flights.listings', compact('flights'))->with([
            'title' =>  'Edit a flight',
            'targetRoute' => 'admin.flights.edit',
        ]);
    }
}
