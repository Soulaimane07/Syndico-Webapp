<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulesextra extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_Fr',
        'para1_Fr',
        'para2_Fr',

        'title_An',
        'para1_An',
        'para2_An',

        'title_Ar',
        'para1_Ar',
        'para2_Ar',
    ];
}
