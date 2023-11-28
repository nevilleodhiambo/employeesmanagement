<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'department_id',
        'job_title',
        'dob',
        'email',
        'hire_date',
        'designation',
        'salary',
        'image'
    ];
    public function allowance(){
        return $this->belongsToMany(Allowance::class, 'employee_allowance');
    }

    public function allowances()
    {
        return $this->hasMany(Allowance::class);
    }
    public function attendance(){
        return $this->hasMany(Attendance::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }

}
