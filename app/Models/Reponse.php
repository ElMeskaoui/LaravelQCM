<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;

    protected $fillebl = [
        'id_reponse',
        'id_question',
        'lib_reponse',
        'corect'
    ];
}
