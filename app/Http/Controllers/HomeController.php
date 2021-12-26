<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        //Session Protected
        // if(Session::has('adminSession')){
        //     //Perform all dashboard task
        // }
        // else{
        //     return redirect('/login')->with('flash_message_error', 'Please Login First');
        // }
        return view('dashboard');
    }
}
