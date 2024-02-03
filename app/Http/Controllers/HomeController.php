<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->search) {
            $flights = Flight::latest()->filter(request(['search', 'searchFor']))->take(6)->get();
            return view('home',compact('flights'));
        }

        $flights = Flight::where('ticket_price', '<=', 2000)
            ->orderBy('ticket_price', 'desc')
            ->take(6)
            ->get();

        $request->flash();
        return view('home',compact('flights'));
    }
}
