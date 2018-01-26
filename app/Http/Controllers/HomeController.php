<?php

namespace App\Http\Controllers;

use App\Area;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::get()->toTree();

        return view('home', compact('areas'));
    }
}
