<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::whereDate('departure_time', today())->get();
        return view('guest.trains.index', compact('trains'));
    }
}
