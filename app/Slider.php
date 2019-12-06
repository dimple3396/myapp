<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $table = 'sliders';
    protected $fillable = [
        'title', 'photo',
     ];
}
