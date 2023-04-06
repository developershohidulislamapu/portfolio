<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $fillable = [
        'main_title','sub_title1','sub_title2','sub_title3'
    ];
}
