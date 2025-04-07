<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class booking extends Model
{
    public $timestamps = false;
    public function User(){
        return $this->belongsTo(User::class,'User_id');
    }
    public function report(){
        return $this->hasOne(report::class,'booking_id');
    }
    public function appoinment(){
        return $this->hasOne(appoinment::class,'booking_id');
    }
}
