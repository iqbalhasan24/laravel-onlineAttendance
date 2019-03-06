<?php

namespace App\Http\Controllers;
use App\User;
use App\Attendance;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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



public function staf_profile(Request $request, $id){
      $pageTitle="MY Profile";
      $data =User::where('id', $id)->first();
      
      return view('staff-profile', [
            'pageTitle' => $pageTitle,
            'data' => $data
        ]);

   }


public function update_profile(Request $request, $id){
      $pageTitle    ="Profile Update";
      $input        = $request->all();      
      $dob          = trim($input['dob']);
      $userModel    =User::where('id', $id)->first();
      if($dob !=""){
          $userModel->dob  = $dob;
      }else{
         $userModel->dob  = $userModel->dob;        
      }

    try {
            $userModel->first_name =trim($input['first_name']);
            $userModel->last_name  =trim($input['last_name']);
            $userModel->email      =trim($input['email']);
            $userModel->update();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
      return redirect()->back();
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



public function update_employee_profile(Request $request, $id){
      $pageTitle    ="Employee Profile Update";
      $input        = $request->all();      
      $dob          = trim($input['dob']);
      $userModel    =User::where('id', $id)->first();
      if($dob !=""){
          $userModel->dob  = $dob;
      }else{
         $userModel->dob  = $userModel->dob;        
      }

    try {
            $userModel->first_name =trim($input['first_name']);
            $userModel->last_name  =trim($input['last_name']);
            $userModel->email      =trim($input['email']);
            $userModel->update();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
      return redirect()->back();
   }



}
