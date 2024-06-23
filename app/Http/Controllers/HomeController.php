<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ControllerBase;




use Illuminate\Http\Request;

class HomeController extends  ControllerBase
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
     public function index()
     {
         $sharedData = $this->getSharedData();
         return view('home', $sharedData);
     }
    
}
