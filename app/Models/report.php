<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    public $timestamps = false;
    public function booking(){
        return $this->belongsTo(booking::class,'booking_id');
    }
    public function vaccine(){
        return $this->belongsTo(vaccine::class,'vaccine_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
