<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',

        'title_Fr',
        'title_An',
        'title_Ar',

        'label1_Fr',
        'label1_An',
        'label1_Ar',

        'label2_Fr',
        'label2_An',
        'label2_Ar',

        'label3_Fr',
        'label3_An',
        'label3_Ar',

        'label4_Fr',
        'label4_An',
        'label4_Ar',

        'label5_Fr',
        'label5_An',
        'label5_Ar',

        'button_Fr',
        'button_An',
        'button_Ar'
    ];
}
