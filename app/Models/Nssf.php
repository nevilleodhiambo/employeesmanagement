<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nssf extends Model
{
    use HasFactory;
    protected $fillable = [
        'lel',
        'hel',
        'pension'
    ];
}
