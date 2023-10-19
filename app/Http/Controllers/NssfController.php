<?php

namespace App\Http\Controllers;

use App\Models\Nssf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NssfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nssfs = Nssf::all();
        return view('deductions/nssf/index', compact('nssfs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deductions/nssf/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'lel' => 'required|integer',
            'hel' => 'required|integer',
            'pension' => 'required|integer',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Nssf::create([
            'lel' => $request->input('lel'),
            'hel' => $request->input('hel'),
            'pension' => $request->input('pension'),
        ]);
        return to_route('nssf.index')->with('status', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nssf $nssf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $nssf = Nssf::where('id', $id)->first();
        return view('deductions/nssf/create', compact('nssf'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $nssf = Nssf::where('id', $id)->first();
        $validator = Validator::make($request->all(), [
            'lel' => 'required|integer',
            'high' => 'required|integer',
            'pension' => 'required|integer',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $nssf->lel = $request->input('lel');
        $nssf->hel = $request->input('hel');
        $nssf->pension = $request->input('pension');
        $nssf->save();
        return to_route('nssf.index')->with('status', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nssf $nssf)
    {
        //
    }
}
