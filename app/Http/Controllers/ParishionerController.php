<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParishionerController extends Controller
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

    public function index()
    {
        $data['parishioners'] = \App\Parishioner::get();

        return view('parishioner', $data);
    }
}
