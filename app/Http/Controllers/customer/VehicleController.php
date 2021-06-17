<?php

namespace App\Http\Controllers\Customer;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Auth::user()->vehicles;

        return view('customer.vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('customer.vehicles.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'make'          => ['required'],
            'color'         => ['required'],
            'reg_number'    => ['required'],
            'VIN_number'    => ['required'],
        ]);

        Vehicle::create([
            'make'          => $request->make,
            'color'         => $request->color,
            'reg_number'    => $request->reg_number,
            'VIN_number'    => $request->VIN_number,
            'user_id'       => auth()->id()
        ]);

        return redirect()->route('customer.vehicles.index')->with('success', 'Vehicle successfully added');
    }
}
