<?php

namespace App\Http\Controllers;
use App\Travel;
use App\Gallery;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{

    public function index()
    {
        $data = Travel::all();
        return view('fe.home', compact('data'));
    }


}
