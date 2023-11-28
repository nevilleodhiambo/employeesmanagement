<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'amount'
    ];

    public function employee(){
        return $this->belongsToMany(Employee::class);
    }
    public function giveallowance(){
        return $this->hasMany(giveallowance::class);
    }
}
