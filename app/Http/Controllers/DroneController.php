<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DroneController extends Controller
{
    public function index(){
        return view('drone.index');
    }
}
