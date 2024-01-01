<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
     protected $data_cat = [
        'rang_prise',
        'cat_name',
        'id',
      //   'rang_price',
     ];

      public function car(){
        return $this->hasMany(Car::class,'id');
    }
  }