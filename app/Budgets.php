<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budgets extends Model
{
    protected $fillable = [
        'mail',
        'type',
        'meters',
        'quant'
    ];
}
