<?php

namespace App\Http\Controllers;

use App\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $pageTitle = "All Employee List";
        $data = User::where('status', '!=','cancel')
              ->paginate(10);

        return view('home', [
            'data' => $data,
            'pageTitle' => $pageTitle
        ]);
    }
}
