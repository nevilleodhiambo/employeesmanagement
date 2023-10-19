<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('department/index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3',
            'description' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $department = new Department();
        $department->name = $request->name;
        $department->description = $request->description;
        $department->save();

        return redirect()->route('department.index')->with('status', 'Department Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $department = Department::where('id', $id)->first();
        return view('department/edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $department = Department::where('id', $id)->first();
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3',
            'description' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
       $department->name = $request->input('name');
       $department->description = $request->input('description');
       $department->save();

        return redirect()->route('department.index')->with('status', 'Department Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $department = Department::where('id', $id)->first();
        $department->delete();
        return redirect()->route('department.index')->with('status', 'Department Successfully Deleted');

    }
}
