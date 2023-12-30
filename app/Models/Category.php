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
      //   'rang_price',
     ];
}
