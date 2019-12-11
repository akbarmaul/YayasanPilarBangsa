<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'tags',
        'image',
    ];
    
}
