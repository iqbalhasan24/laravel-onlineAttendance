<?php

namespace App\Http\Controllers;

use App\User;
use App\Attendance;
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
        $data = User::with('userAttendances')->get();
        return view('home', [
            'data' => $data,
            'pageTitle' => $pageTitle
        ]);
            
    }



     public function attendance_details($id){

        $pageTitle = "Attendance Details";
        $data = Attendance::where('user_id', $id)
                         ->orderBy('id', 'DESC')    
                        ->paginate(10);
        $user=User::select('first_name','last_name','job_id')->where('id', $id)->first();

        //dd($user->first_name);                
        return view('pages.attendance-details', [
            'pageTitle' => $pageTitle,
            'data' => $data,
            'user' => $user
        ]);


     }    

}
