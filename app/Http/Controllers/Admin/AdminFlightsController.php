<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class AdminFlightsController extends Controller
{
    public function create()
    {
        return view('admin.flights.create');
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

    public function edit(Flight $flight) {
        return view('admin.flights.edit', compact('flight'));
    }

    public function update(Request $request, Flight $flight) {
        try {
            $flight->update([
                'company' => $request->input('company'),
                'plane' => $request->input('plane'),
                'from' => $request->input('from'),
                'to' => $request->input('to'),
                'boarding' => $request->input('boarding'),
                'departure' => $request->input('departure'),
                'arrival' => $request->input('arrival'),
                'ticket_price' => $request->input('ticket_price'),
            ]);

            return redirect()->route('admin.index')->with('message', 'Flight updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.index')->with('message', 'Flight could not be updated.');
        }
    }



    public function destroy(Flight $flight) {
        try {
            $flight->delete();

            return redirect()->route('admin.index')->with('message', 'Flight deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.index')->with('message', 'Flight could not be deleted.');
        }
    }
}
