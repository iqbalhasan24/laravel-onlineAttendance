<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
	public $timestamps = true;
	protected $table = 'attendances';
	protected $fillable = [
        'user_id', 'in_time', 'out_time','common_ip', 'total_hour', 'attendance_in',
    ];
    //id	user_id	in_time	out_time	common_ip	total_hour	attendance_in	created_at	updated_at


}
