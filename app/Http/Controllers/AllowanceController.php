<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allowances = Allowance::all();
        return view('allowance/index', compact('allowances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('allowance/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'amount' => 'required|integer'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Allowance::create([
            'name' => $request->input('name'),
            'amount' => $request->input('amount'),
        ]);

        return to_route('allowance.index')->with('status', 'Successfully Created Allowances');
    }

    /**
     * Display the specified resource.
     */
    public function show(Allowance $allowance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $allowance = Allowance::where('id', $id)->first();
        return view('allowance/edit', compact('allowance'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $allowance = Allowance::where('id', $id)->first();
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'amout' => 'required|integer'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $allowance->name = $request->input('name');
        $allowance->amount = $request->input('amount');
        $allowance->save();
        return to_route('allowance.index')->with('status', 'Successfully Updated Allowance');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $allowance = Allowance::where('id', $id)->first();
        $allowance->delete();
        return to_route('allowance.index')->with('status', 'Successfully Deleted Allowance');

    }
}
