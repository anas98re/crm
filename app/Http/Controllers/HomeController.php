<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\leaves;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        // return Auth::user()->name;
        // $home=home::all();

        // $varabsence=leaves::all();
        return view('home');
    }
}
