<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    // protected $table = 'some_name';
    // By default Modal is singular and connects to the Plural in migration for above code overrides

    // There are functions eg Pizza::all(); that are inhertied from model.

    protected $casts = [
        'toppings' => 'array'
    ];

}
