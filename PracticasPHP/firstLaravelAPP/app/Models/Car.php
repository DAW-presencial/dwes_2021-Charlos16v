<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model{
    protected $table = 'car';

    public $color;
    public $type;
}
