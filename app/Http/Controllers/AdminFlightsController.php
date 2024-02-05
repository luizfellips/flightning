<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class AdminFlightsController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        try {
            $flight = new Flight([
                'company' => $request->input('company'),
                'plane' => $request->input('plane'),
                'from' => $request->input('from'),
                'to' => $request->input('to'),
                'boarding' => $request->input('boarding'),
                'departure' => $request->input('departure'),
                'arrival' => $request->input('arrival'),
                'ticket_price' => $request->input('ticket_price'),
            ]);

            $flight->save();

            return redirect()->route('admin.index')->with('message', 'Flight registered successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.index')->with('message', 'Flight could not be registered.');
        }

    }
}
