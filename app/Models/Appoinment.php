<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    public $timestamps = false;
    public function user(){
        return $this->belongsTo(User::class,'User_id');
    }
    public function booking(){
        return $this->belongsTo(booking::class,'booking_id');
    }
}
