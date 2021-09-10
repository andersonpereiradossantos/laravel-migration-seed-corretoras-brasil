<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corretora extends Model
{
    protected $table = 'corretora';

    protected $fillable = [
        'cnpj','nome'
    ];        
}
