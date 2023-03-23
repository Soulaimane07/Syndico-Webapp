<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'city',
        'n_imm',
        'n_app'
    ];
}
