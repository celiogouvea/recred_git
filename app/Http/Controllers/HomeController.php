<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Model\Empresas;

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
    public function index( User $user)
    {
        return view('home', compact('users'));
    }
}
