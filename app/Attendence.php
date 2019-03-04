<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{

	protected $fillable = [
        'user_id', 'in_time', 'out_time','common_ip', 'total_hour', 'attendance_in',
    ];
}
