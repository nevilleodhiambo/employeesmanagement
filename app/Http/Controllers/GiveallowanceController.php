<?php

namespace App\Http\Controllers;

use App\Models\giveallowance;
use App\Http\Controllers\Controller;
use App\Models\Allowance;
use App\Models\Employee;
use Illuminate\Http\Request;

class GiveallowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $giveallowance = giveallowance::all();
        return view('giveallowance/index', compact('giveallowance'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $employee = Employee
        $employee_id = $request->employee_id;
        $allowances = Allowance::all();
        return view('giveallowance/create', compact('employee_id', 'allowances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $validatedData = $request->validate([
        'employee_id' => 'required|exists:employees,id',
        'allowance' => 'required|array',
        'allowance.*' => 'exists:allowances,id',
        'amount' => 'required|array',
        'amount.*' => 'numeric',
    ]);

    // Loop through the selected allowances and amounts
    foreach ($validatedData['allowance'] as $key => $allowanceId) {
        $amount = $validatedData['amount'][$key];

        // Create a new GiveAllowance record
        GiveAllowance::create([
            'employee_id' => $validatedData['employee_id'],
            'allowance_id' => $allowanceId,
            'amount' => $amount,
        ]);
    }


    return to_route('employees.index')->with('status', 'Successfully Assigned Allowance');



    }

    /**
     * Display the specified resource.
     */
    public function show(giveallowance $giveallowance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $giveallowance = giveallowance::all();
        return view('giveallowance/edit', compact('giveallowance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $giveallowance = giveallowance::where('id', $id)->first();
        return $giveallowance;
         $validatedData = $request->validate([
        'employee_id' => 'required|exists:employees,id',
        'allowance' => 'required|array',
        'allowance.*' => 'exists:allowances,id',
        'amount' => 'required|array',
        'amount.*' => 'numeric',
    ]);

    // Loop through the selected allowances and amounts
    foreach ($validatedData['allowance'] as $key => $allowanceId) {
        $amount = $validatedData['amount'][$key];

        // Create a new GiveAllowance record
        $giveallowance->employee_id = $validatedData['employee_id'];
        $giveallowance->allowance_id = $allowanceId;
        $giveallowance->amount = $request->input('amount');
        $giveallowance->save();
        return redirect()->route('employees.index')->with('status', 'Successfully Updated Status');
        // GiveAllowance::create([
        //     'employee_id' => $validatedData['employee_id'],
        //     'allowance_id' => $allowanceId,
        //     'amount' => $amount,
        // ]);
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $giveallowance= giveallowance::where('id', $id)->first();
        $giveallowance->delete();
        return redirect()->route('employees.index')->with('status', 'Successfully Deleted');
    }
}
