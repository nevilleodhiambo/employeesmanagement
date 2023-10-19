<?php

namespace App\Http\Controllers;

use App\Models\HousingLevy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HousingLevyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levies = HousingLevy::all();
        return view('deductions/levy/index', compact('levies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deductions/levy/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'levy' => 'required|decimal:2'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        HousingLevy::create([
            'levy' => $request->input('levy')
        ]);
        return to_route('levy.index')->with('status', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(HousingLevy $housingLevy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $levy = HousingLevy::where('id', $id)->first();
        return view('deductions/levy/edit', compact('levy'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $levy = HousingLevy::where('id', $id)->first();
        $validator = Validator::make($request->all(), [
            'levy' => 'required|decimal:2'
        ]);

        if($validator->fails()){
            return redirect()->route('levy.index')->withErrors($validator)->withInput();
        }
        $levy->levy = $request->levy;
        $levy->save();
        return to_route('levy.index')->with('status', 'Successfully Updated');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HousingLevy $housingLevy)
    {
        //
    }
}
