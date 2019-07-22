<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
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
        return view('home');
    }

    public function about()
    {
        //$users = User::all();
        return view('about');
    }
    public function profile()
    {
        //$user = Auth::user();
        $users = User::all();

        return view('profile',['users' => $users]);
    }
    public function contact()
    {
        //$users = User::all();
        return view('contact');
    }
    public function store(Request $request)
    {
        $name = $request->name;

        return redirect()->route('thanks',['name' =>$name]);
    }
    public function thanks($name, Request $request)
    {

        return view('thankyou')->with(compact('name'));
    }
}
