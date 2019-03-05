<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
	public $timestamps = true;
	protected $table = 'attendances';
	protected $fillable = [
        'user_id', 'in_time', 'out_time','common_ip', 'total_hour', 'attendance_in',
    ];
    public function user()
		    {
		        return $this->belongsTo('App\User','user_id','id');
		    }

}
