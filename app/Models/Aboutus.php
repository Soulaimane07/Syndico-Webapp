<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_Fr',
        'title_An',
        'title_Ar',
        'para_Fr',
        'para_An',
        'para_Ar',
        'image'
    ];

}
