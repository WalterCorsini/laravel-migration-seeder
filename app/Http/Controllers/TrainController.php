<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trainList = Train::all();
        dd($trainList);
        return view('train');
    }
}
