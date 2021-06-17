<?php

namespace App\Http\Controllers\admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Middleware\IsAdmins;
use App\Http\Controllers\Controller;
use App\Models\User;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware(IsAdmins::class);
    }

    public function noBookings()
    {
        $bookings = User::doesntHave('bookings')->paginate(10);

        return view('admin.bookings.no-bookings', compact('bookings'));
    }
}
