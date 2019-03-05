<?php

namespace App\Http\Controllers;
use App\User;
use App\Attendance;
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
        if( $input==[]){
              return redirect('/');
            }
        $job_id = trim($input['job_id']);
        $local_ip = trim($input['local_ip']);
        $common_ip = (trim($input['common_ip'])) ? trim($input['common_ip']):"";

        $user = User::select('id','local_ip')
                            ->where('job_id', $job_id)
                            ->where('local_ip', $local_ip)
                            ->where('status', '!=', 'cancel')
                            ->first();
        if($user){        
        $user_id =$user->id; 
        $date =new DateTime(); 
        $current_date_time=$date->format('Y-m-d H:i:s');
        $current_date=$date->format('Y-m-d');
<<<<<<< HEAD
        $AttendanceModel = new Attendance();

        $login_logout_check=Attendance::where('attendance_in', $current_date)
=======
        $AttendenceModel = new Attendence();

        $login_logout_check=Attendence::where('attendance_in', $current_date)
>>>>>>> cbc6a31f82c884d2945d058964fc80de2bce7b9f
                            ->where('user_id', $user_id)
                            ->where('total_hour','>',0)                            
                            ->count();
        
<<<<<<< HEAD
        if($login_logout_check <= 0){                         
        if($user_id){        
            $checkIn = Attendance::where('attendance_in', $current_date)
=======
        if($login_logout_check <= 0){

                          
        if($user_id){        
            $checkIn = Attendence::where('attendance_in', $current_date)
>>>>>>> cbc6a31f82c884d2945d058964fc80de2bce7b9f
                                ->where('user_id', $user_id)
                                ->count();
            if($checkIn < 1 ){
                $loginArray=[
                            'user_id' => $user_id,
                            'in_time' => $current_date_time,
                            'out_time' => $current_date_time,
                            'total_hour' => 0,
                            'common_ip' => $common_ip,
                            'attendance_in' => $current_date
                        ];
            }else{
<<<<<<< HEAD
                $checkOut= Attendance::select('in_time')
=======
                $checkOut= Attendence::select('in_time')
>>>>>>> cbc6a31f82c884d2945d058964fc80de2bce7b9f
                        ->where('attendance_in', $current_date)
                        ->where('user_id', $user_id)
                        ->where('total_hour', 0)
                        ->first();               
                   
                    if($checkOut){
<<<<<<< HEAD
                         $AttendanceModel=Attendance::where('attendance_in', $current_date)
=======
                         $AttendenceModel=Attendence::where('attendance_in', $current_date)
>>>>>>> cbc6a31f82c884d2945d058964fc80de2bce7b9f
                            ->where('user_id', $user_id)
                            ->where('total_hour',0)                            
                            ->first();

<<<<<<< HEAD
                            $datetime1 = new DateTime($AttendanceModel->in_time);//start time
=======
                            $datetime1 = new DateTime($AttendenceModel->in_time);//start time
>>>>>>> cbc6a31f82c884d2945d058964fc80de2bce7b9f
                            $datetime2 = new DateTime($current_date_time);//end time
                            $interval = $datetime1->diff($datetime2);
                            $hours= (float)$interval->format('%H hours');
                            $minutes=(float)$interval->format('%i minutes');
                            $seconds= (float)$interval->format('%s seconds');
                            $total_hour = $hours + ($minutes/60) + ($seconds/3600); 

<<<<<<< HEAD
                           $AttendanceModel->out_time = $current_date;
                           $AttendanceModel->total_hour = (float)$total_hour;
=======
                           $AttendenceModel->out_time = $current_date;
                           $AttendenceModel->total_hour = (float)$total_hour;
>>>>>>> cbc6a31f82c884d2945d058964fc80de2bce7b9f
                           //dd('logout');
            		}
                }                   
        	}     

        try {
            if($checkIn < 1)
            {
<<<<<<< HEAD
                Attendance::insert($loginArray);
            	Session::flash('message', 'Successfully Loged In!');
                DB::commit();
            }else{
                if($checkOut)
                {
                	$AttendanceModel->update();
=======
                Attendence::insert($loginArray);
            	Session::flash('message', 'Successfully Loged In!');
                DB::commit();
            }else{

                if($checkOut)
                {
                	$AttendenceModel->update();
>>>>>>> cbc6a31f82c884d2945d058964fc80de2bce7b9f
                	Session::flash('message', 'Successfully Logout!');
                	DB::commit();
                }
            }
<<<<<<< HEAD
=======

>>>>>>> cbc6a31f82c884d2945d058964fc80de2bce7b9f
        } catch (\Exception $e) {
            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('danger', $e->getMessage());
        }
      }else{
            Session::flash('message', 'Your attendance already done!'); 
           } 
     }else{
        Session::flash('message', 'Your are not in your computer!!!');
     }
        return redirect()->back();
    }
<<<<<<< HEAD
=======





>>>>>>> cbc6a31f82c884d2945d058964fc80de2bce7b9f
}
