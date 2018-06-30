<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Form extends Model
{
    protected $fillable = [
        'name', 'email', 'tel', 'address', 'wins', 'letter', 'birthplace', 'date', 'place', 'exp', 'app'
    ];
    
    protected $guarded=[];
}
