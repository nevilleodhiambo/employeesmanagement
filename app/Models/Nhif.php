<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhif extends Model
{
    use HasFactory;
    protected $fillable = [
        'high_income',
        'low_income',
        'rates',
    ];
}
