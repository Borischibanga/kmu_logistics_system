<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trips;

class DriverOfficerController extends Controller
{
    public function driverofficer()
    {
        // Add your logic for super admin home page
        return view('DriverOfficer/driverofficer');
    }

    public function bookings()
    {
        $bookings=trips::all();
        return view('DriverOfficer/bookings')->with('bookings',$bookings);
    }
    public function controlSeats()
    {
            $trip = trips::pluck('trip_name','id');
        return view('DriverOfficer/controlSeats', compact('trip'));
    }
    public function toggleStatus($id)
    {
        $trip = trips::findOrFail($id);
        $trip->status = $trip->status === 'enabled' ? 'disabled' : 'enabled';
        $trip->save();

        return redirect()->back()->with('success', 'Trip status updated successfully.');
    }
    public function setTrips()
    {
        return view('DriverOfficer/setTrips');
    }
    public function bookingList()
    {
        return view('DriverOfficer/bookingList');
    }
    public function createTrips(request $request)
    {
        $validatedData = $request->validate([
            'trip_name' => 'required',
        ]);
        $trips = trips::create([
            'trip_name' => $validatedData['trip_name'],
        ]);
        if(!$trips) {
            return redirect()->back()->with('error','Trip SetUp Failed!');
        }
        return redirect()->back()->with('success','Trip SetUp Successful');
    }
    public function update(Request $request)
    {
            $tripId = $request->input('id');
            $newNumberOfSeats = $request->input('number_of_seats');
            trips::where('id', $tripId)->update(['number_of_seats' => $newNumberOfSeats]);
        return redirect()->back()->with('success', 'Number of seats updated successfully.');
    }
    }

