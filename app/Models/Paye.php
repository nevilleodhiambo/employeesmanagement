<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paye extends Model
{
    use HasFactory;
    protected $fillable = [
        'low_income',
        'high_income',
        'rates'
    ];
}
