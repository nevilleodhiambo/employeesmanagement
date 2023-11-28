<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Controllers\Controller;
use App\Models\Allowance;
use App\Models\Department;
use App\Models\giveallowance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $allowances = Allowance::all();
        $departments = Department::all();
        return view('employees.create', compact('departments', 'allowances'));
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
            // 'password' => 'required|password'
            

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

        // $employee->allowance()->sync($request->input('allowances', []));


        return to_route('employees.index')->with('success', 'Successfully Created an Employee');
        
    }
  
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $employee = Employee::where('id', $id)->first();
        $allowances = giveallowance::where('employee_id', $id)->get();
        // return $allowances;
        return view('employees/show', compact('employee', 'allowances'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $allowances = Allowance::all();
        return view('employees.edit', compact('departments', 'allowances'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::where('id', $id)->first();

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

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->department_id = $request->department_id;
        $employee->job_title = $request->job_title;
        $employee->hire_date = $request->hire_date;
        $employee->designation = $request->designation;
        $employee->dob = $request->dob;
        $employee->salary = $request->salary;

        if ($request->hasFile('image')) {
            // Delete the old image file if it exists
            if ($employee->image) {
                Storage::delete('public/' . $employee->image);
            }
    
            // Generate a unique image name using Carbon
            $image = $request->file('image');
            $imageName = Carbon::now()->timestamp . '.' . $image->getClientOriginalExtension();
    
            // Store the new image in the 'public/uploads' directory
            $image->storeAs('uploads', $imageName, 'public');
    
            // Update the employee's image path
            $employee->image = 'uploads/' . $imageName;
        }

        $employee->allowances()->sync($request->input('allowances', []));


        $employee->save();
        return to_route('employees.index')->with('success', 'Successfully Created an Employee');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::where('id', $id)->first();
            // Delete the user's image if it exists
            if ($employee->image) {
                Storage::delete('public/' . $employee->image);
            }
    
            // Delete the user's record
            $employee->delete();
    }
}
