<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';
    public $timestamps = false; //matikan timestamps, laravel nyalain auto

    protected $fillable = [
        'name',
        'image',
        'type',
    ];
}
