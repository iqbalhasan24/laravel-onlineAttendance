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


   public function edit_employee(Request $request, $id){
   		$pageTitle="Edit employee Information";
        $formdata = User::where('id', $id)->first();
        $data = User::where('status', '!=','cancel')->orderBy('id', 'DESC')
              ->paginate(10);


              //dd($formdata->first_name);
   	

   		return view('pages.edit-profile', [
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
}
