<?php

namespace App\Http\Controllers;

use App\Models\Relief;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReliefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reliefs = Relief::all();
        return view('deductions.relief.index', compact('reliefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deductions.relief.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'relief' => 'required|integer',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Relief::create([
            'relief' => $request->input('relief'),
        ]);

        return to_route('relief.index')->with('status', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Relief $relief)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $relief = Relief::where('id', $id)->first();
        return view('deductions.relief.create', compact('relief'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $relief = Relief::where('id', $id)->first();
        $validator = Validator::make($request->all(),[
            'relief' => 'required|integer',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $relief->relief = $request->input('relief');
        $relief->save();
        return to_route('relief.index')->with('status', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Relief $relief)
    {
        //
    }
}
