<?php

namespace App\Http\Controllers;
use App\User;
use App\director;
use App\videogallery;
use App\sponsor;
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
     $alluser=User::count();
    $director=director::count();
    $video=videogallery::count();
    $sponsor=sponsor::count();
       return view('backend.deshboard',compact('alluser','director','video','sponsor'));
    }
}
