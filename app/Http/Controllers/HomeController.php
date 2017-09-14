<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
        // return view('home');
    }
    public function admin()
    {
        return view('dashbord');
    }
    public function flot()
    {
        return view('flot');
    }
     public function morris()
    {
        return view('morris');
    }
    public function tables()
    {
        return view('tables');
    }
     public function forms()
    {
        return view('forms');
    }
     public function panels_wells()
    {
        return view('panels_wells');
    }
     public function buttons()
    {
        return view('buttons');
    }
     public function notifications()
    {
        return view('notifications');
    }
     public function typography()
    {
        return view('typography');
    }

     public function icons()
    {
        return view('icons');
    }
    

}
