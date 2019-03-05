<?php

namespace App\Http\Controllers;
use App\User;
use App\Attendence;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use DateTime;

class ProfileController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('home');
    }



   public function employee_details($id){

        $pageTitle = "Employee Details";
        $data = User::where('status', '!=','cancel')
                ->where('id', $id)->first();
        return view('pages.employee-details', [
            'data' => $data,
            'pageTitle' => $pageTitle
        ]);
     }

   public function edit_employee(Request $request, $id){
   		$pageTitle="Edit employee Information";
        $formdata = User::where('id', $id)->first();
        $data = User::where('status', '!=','cancel')->orderBy('id', 'DESC')
              ->paginate(10);
   		return view('pages.edit-staff', [
            'pageTitle' => $pageTitle,
            'formdata' => $formdata,
            'data' => $data
        ]);

   }


   public function update_employee(Request $Request, $id){

   		$input = $Request->all();	
        $userModel = User::where('id', $id)->first();

        
   		dd($userModel);

   }

public function staf_profile(Request $request, $id){
      $pageTitle="MY Profile";
      $data =User::where('id', $id)->first();
      
      return view('staff-profile', [
            'pageTitle' => $pageTitle,
            'data' => $data
        ]);

   }

public function edit_profile(Request $request, $id){
      $pageTitle="Edit employee Information";
        $formdata = User::where('id', $id)->first();
        $data = User::where('status', '!=','cancel')->orderBy('id', 'DESC')
              ->paginate(10);
      return view('pages.edit-staff', [
            'pageTitle' => $pageTitle,
            'formdata' => $formdata,
            'data' => $data
        ]);

   }






}
