<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFlightsController extends Controller
{
    public function create() {
        return view('admin.flights.create');
    }
}
