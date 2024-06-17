<?php

namespace App\Http\Controllers;
use App\Models\Post; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function welcome(){
        $allPost = Post::find(1);
        return view('welcome')->with('allPost', $allPost);
    }

    public function index(){
        return view('home');
    }
}