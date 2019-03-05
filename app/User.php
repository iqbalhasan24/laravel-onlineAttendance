<?php

namespace App;
use App\Attendance;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

   
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'dob', 'department_name', 'user_role','status','job_id','local_ip','comon_ip',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function userAttendances()
        {
            return $this->hasMany(Attendance::class, 'user_id', 'id');
        }

    
}

