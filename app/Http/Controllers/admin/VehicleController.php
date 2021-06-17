<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::paginate(10);

        return view('admin.vehicles.index', compact('vehicles'));
    }

    public function withVehicles()
    {
        $users = User::has('vehicles')->paginate(10);

        return view('admin.vehicles.with-vehicles', compact('users'));
    }

    public function withoutVehicles()
    {
        $users = User::doesnthave('vehicles')->paginate(10);

        return view('admin.vehicles.without-vehicles', compact('users'));
    }


    // public function withVehicles()
    // {
    //     $users = User::has('vehicles', '3')->paginate(10);

    //     return view('admin.vehicles.with-vehicles', compact('users'));
    // }

    // public function withVehicles()
    // {
    //     $users = User::wherehas('vehicles', function (Builder $query) {
    //         $query->where('make', 'like', 'cryslar');
    //     })->paginate(10);

    //     return view('admin.vehicles.with-vehicles', compact('users'));
    // }

    // public function withVehicles()
    // {
    //     $users = User::wherehas('vehicles', function (Builder $query) {
    //         $query->where('make', 'like', 'cryslar');
    //     }, 2)->paginate(10);

    //     return view('admin.vehicles.with-vehicles', compact('users'));
    // }
}
