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

class AttendanceController extends Controller
{      


	public function post_login_logout(Request $request)
    	{
        $input = $request->all();
        $job_id = trim($input['job_id']);
        $local_ip = trim($input['local_ip']);
        $common_ip = (trim($input['common_ip'])) ? trim($input['common_ip']):"";

        $user_id = User::select('id')
                            ->where('job_id', $job_id)
                            ->where('local_ip', $local_ip)
                            ->where('status', '!=', 'cancel')
                            ->first();
       // dd($user_id);

        $date =new \DateTime();
        dd(time());

        $a=1551657059;
        $b=1851657059;
        $c=$b-$a;
		$date = new DateTime("now", new DateTimeZone('Asia/Dhaka') );
        $current_date= $date->format('Y-m-d');
        if($user_id){
        	$checkIn = Attendence::where('attendance_in', $current_date)
        						->where('user_id', $user_id)
        						->count();
        	if($checkIn < 1 ){
        		$AttendenceModel = new Attendence();
	       		$AttendenceModel->user_id = $user_id;
        		$AttendenceModel->in_time = $date->format('Y-m-d H:i:s');
	       		$AttendenceModel->out_time = NULL;
                $AttendenceModel->total_hour = NULL;
	       		$AttendenceModel->common_ip = $common_ip;
	       		$AttendenceModel->attendance_in = $current_date;
        	}
			$checkOut= Attendence::select('in_time')
					->where('attendance_in', $current_date)
					->where('user_id', $user_id)
					->where('out_time', NULL)
					->first();
        	if($checkOut){
			$AttendenceModel=Attendence::where('attendance_in', $current_date)
						->where('user_id', $user_id)
						->where('in_time','<>', NULL)
						->where('out_time', NULL)
						->first();
        	$AttendenceModel->out_time = $date->format('Y-m-d H:i:s');

        		}
        	}       


        /* Transaction Start Here */
        DB::beginTransaction();
        try {

            if($checkIn < 1){            	
           		 $AttendenceModel->save();
           		Session::flash('message', 'Successfully Login');
            	DB::commit();
            }
            if($checkOut){
            	$AttendenceModel->update();
            	Session::flash('message', 'Successfully Logout!');
            	DB::commit();

            }            

        } catch (\Exception $e) {
            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('danger', $e->getMessage());
        }
        return redirect()->back();
    }


}
