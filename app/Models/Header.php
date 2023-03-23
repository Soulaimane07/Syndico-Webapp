<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $fillable = [
        'title1_Fr',
        'title1_An',
        'title1_Ar',
        'title2_Fr',
        'title2_An',
        'title2_Ar',
        'para_Fr',
        'para_An',
        'para_Ar',
        'image',
        'button_Fr',
        'button_An',
        'button_Ar',
    ];
}
