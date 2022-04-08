<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function welcome() {
        // $allCars = Car::paginate(10);
        return view('layout.home');
                // ->with('cars', $allCars);
    }
}
