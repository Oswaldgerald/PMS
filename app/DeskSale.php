<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeskSale extends Model
{
    protected $fillable = [
        'name', 'description','cashier','StoreManager'
    ];
}
