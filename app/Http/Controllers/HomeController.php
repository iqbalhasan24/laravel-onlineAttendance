<?php

namespace App\Http\Controllers;

use App\User;
use App\Attendence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;

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

        return view('pages.all-employee', [
            'data' => $data,
            'pageTitle' => $pageTitle
        ]);
    }




    public function monthly_attendance(){
          
        $pageTitle = "Monthly Attendance";
        //$data = User::where('status', '!=','cancel')->paginate(10);
        //dd($data, 'ok');
       $data = User::where('status', '!=','cancel')
              ->paginate(10);
        //$data = User::with('user')->find(1)->get();
        /* $data = Attendance::where('user_id', $id)
              ->paginate(10);
        dd($data);*/

        return view('home', [
            'data' => $data,
            'pageTitle' => $pageTitle
        ]);
            
    }



     public function attendance_details($id){

        $pageTitle = "Attendance Details";
        $data = Attendence::where('user_id', $id)
              ->paginate(10);
        return view('pages.attendance-details', [
            'data' => $data,
            'pageTitle' => $pageTitle
        ]);


     }    

}
