<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory, SoftDeletes;
     protected $fillable = [
        'posttitle',
        'author',
        'description',
          'image',
        'published'
    ];

}
