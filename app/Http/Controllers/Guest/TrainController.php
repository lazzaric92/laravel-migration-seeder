<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::where('date', date("Y/m/d"))->get();
        return view('guest.trains.index', compact('trains'));
    }
}
