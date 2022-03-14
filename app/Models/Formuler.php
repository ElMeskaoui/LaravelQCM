<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formuler extends Model
{
    use HasFactory;

    protected $fillable = [
        'lib_formuler'
    ];
    public function question()
    {
        return $this->hasMany(Questionu::class);
    }
}
