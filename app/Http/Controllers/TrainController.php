<?php

namespace App\Http\Controllers;
use App\Models\Train;
use DateTime;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $curDate = date('Y-m-d');

        $trainList = Train::whereDate('departure_time', $curDate)->get();
        // dd($trainList);
        return view('train', compact('trainList'));
    }
}
