<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandez extends Model
{
    use HasFactory;

    protected $fillable = [

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

        'label6_Fr',
        'label6_An',
        'label6_Ar',

        'button1_Fr',
        'button1_An',
        'button1_Ar',

        'button2_Fr',
        'button2_An',
        'button2_Ar'
    ];
}
