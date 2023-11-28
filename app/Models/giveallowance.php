<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class giveallowance extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'allowance_id',
        'amount'
    ];
    public function allowance(){
        return $this->belongsTo(Allowance::class);
    }
}
