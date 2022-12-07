<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role=Auth::user()->role;
        if($role == 1){
            return redirect()->route('admin.index-admin');
        }else if($role == 2){
            return redirect()->route('pustakawan.index-perpus');
        }else if($role == 3){
            return redirect()->route('users.index-user');
        }else{
            return view('index');
        }
        
    }
}
