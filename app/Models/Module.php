<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_Fr',
        'para_Fr',
        'button_Fr',

        'title_An',
        'para_An',
        'button_An',

        'title_Ar',
        'para_Ar',
        'button_Ar',

        'color',
        'image'
        
    ];
}
