<?php

namespace App\Http\Controllers;

use App\Models\NhifRelief;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NhifReliefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reliefs = NhifRelief::all();
        return view('deductions/nhifrelief/index', compact('reliefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deductions/nhifrelief/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'relief' => 'required|decimal:2',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        NhifRelief::create([
            'relief' => $request->input('relief'),
        ]);

        return to_route('nhifrelief.index')->with('status', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(NhifRelief $nhifRelief)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $relief = NhifRelief::where('id', $id)->first();
        return view('deductions/nhifrelief/create', compact('relief'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $relief = NhifRelief::where('id', $id)->first();
        $validator = Validator::make($request->all(),[
            'relief' => 'required|decimal:2',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $relief->relief = $request->input('relief');
        $relief->save();
        return to_route('nhifrelief.index')->with('status', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NhifRelief $nhifRelief)
    {
        //
    }
}
