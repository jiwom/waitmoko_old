<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seat;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = Seat::where('location_id', 1)->first()->arrangement;

        return view('home', compact('seats'));
    }

    public function store(Request $request)
    {
        $arrangement = $request->seats;
        $seats       = json_decode(Seat::where('location_id', $request->location_id)->first()->arrangement, true);

        foreach ($seats as $seatKey => $seatValue) {
            if ($arrangement[$seatKey] == 'me') {
                $arrangement[$seatKey] = Auth::id();
            }
        }

        Seat::updateOrCreate(
            ['location_id' => $request->location_id],
            ['location_id' => $request->location_id, 'arrangement' => collect($arrangement)->toJson()]
        );

        return back();
    }
}
