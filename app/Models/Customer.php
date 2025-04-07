<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   public $timestamps = false;
   public function user(){
      return $this->belongsTo(User::class,'patient_id');
   }
   public function data(){
      return $this->belongsTo(User::class,'hospital_id');
   }
   public function vaccine(){
      return $this->belongsTo(Vaccine::class);
   }
}
