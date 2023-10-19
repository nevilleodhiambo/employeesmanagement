<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('employees.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'phone_number' => 'required',
            'department_id' => 'required|integer',
            'job_title' => 'required|min:3',
            'dob' => 'required|date',
            'email' => 'required|email:unique,employees',
            'hire_date' => 'required',
            'designation' => 'required',
            'salary' => 'required|integer',
            'image' => 'required|mimes:jpeg,jpg,png,gif,jfif',
            // 'image' => 'required|mime',

            

        ]);


        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // return $request->all();


        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->department_id = $request->department_id;
        $employee->job_title = $request->job_title;
        $employee->hire_date = $request->hire_date;
        $employee->designation = $request->designation;
        $employee->dob = $request->dob;
        $employee->salary = $request->salary;

        $image = $request->file('image');
        $imageName = Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
        $image->storeAs('uploads', $imageName, 'public');
        $employee->image = 'uploads/' .$imageName;
        $employee->save();

        return to_route('employees.index')->with('success', 'Successfully Created an Employee');
        
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
