<?php

namespace App\Http\Controllers;

use App\Models\Nhif;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NhifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhifs = Nhif::all();
        return view('/deductions/nhif/index', compact('nhifs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deductions/nhif/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'low_income' => 'required|integer',
            'high_income' => 'integer|nullable',
            'rates' => 'required|integer'
        ]);

        Nhif::create([
            'low_income' => $request->input('low_income'),
            'high_income' => $request->input('high_income'),
            'rates' => $request->input('rates'),
        ]);

        return to_route('nhif.index')->with('status', 'Successfully Created Nhif Slab');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nhif $nhif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nhif $nhif)
    {
        return view('deductions/nhif/edit', compact('nhif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nhif = Nhif::where('id', $id)->first();

        $request->validate([
            'low_income' => 'required|integer',
            'high_income' => 'integer|nullable',
            'rates' => 'required|integer'
        ]);

        $nhif->low_income = $request->input('low_income');
        $nhif->high_income = $request->input('high_income');
        $nhif->rates = $request->input('rates');
        $nhif->save();
        return to_route('nhif.index')->with('status', 'Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nhif $nhif)
    {
        //
    }
}
