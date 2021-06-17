<?php

namespace App\Http\Controllers\customer;

use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;

class BookingController extends Controller
{
    public function __construct()
    {
        return $this->middleware([Authenticate::class]);
    }

    public function index()
    {
        $bookings = Auth::user()->bookings;

        return view('customer.bookings.index', compact('bookings'));
    }

    public function create()
    {
        $vehicles = Auth::user()->vehicles;

        return view('customer.bookings.create', compact('vehicles'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'booking_date'      => ['required'],
            'vehicle_id'        => ['required'],
        ]);

        Booking::create([
            'booking_date'      => $request->booking_date,
            'vehicle_id'        => $request->vehicle_id,
        ]);

        return redirect()->route('customer.bookings.index')->with('success', 'Booking successfully created!');
    }
}
