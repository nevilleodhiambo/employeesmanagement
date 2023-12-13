<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employees = Employee::with('attendance')->get();
        // return $employees;
        $attendances = Attendance::all();
        // dd($attendances);
        return view('attendance/index', compact('attendances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('attendance/create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(),[
        //     'emp_id' => 'required',
        //     'date' => 'required|date',
        //     'is_present' => 'required|boolean'
        // ]);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        foreach($request->input('emp_ids') as $empId){
           Attendance::create([
            'emp_id' => $empId,
            'date' => now(),
            'is_present' => true,
           ]);
        }
            // $emp_id = $request->input('emp_id');
            // $date = $request->input('date');
            // $is_present = $request->input('is_present');

        // $attendance = Attendance::where('user_id', $emp_id)->where('date', $date)->first();

        // if(!$attendance){
        //     $attendance = new Attendance();
        //     $attendance->emp_id = $request->input('emp_id');
        //     $attendance->date = $request->input('date');
        // }
        // $attendance->is_present = $is_present;
        // $attendance->save();
        return redirect()->route('attendance.index')->with('status', 'Attendance Has Been Successfully Marked');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
}
