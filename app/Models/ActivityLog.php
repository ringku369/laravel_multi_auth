<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Models\Activity;

class ActivityLog extends Activity
{
    
    use HasFactory;
    public $table = 'activity_log';
    public $timestamps = true;
    //public $guarded = ['id'];

    public function admin() {
        return $this->belongsTo(Admin::class,'causer_id','id')->select('id','name','email');
    }
}
