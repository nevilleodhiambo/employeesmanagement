<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = DB::table('roles')->get();
        return view('roles/index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('roles/create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // return $request->all();
        $role = new Role();
        $role->name = $request->name;
        $role->syncPermissions($request->permission_ids);
        $role->save();
        return redirect()->route('roles.index')->with('status', 'Successfully Created a Role');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $role = Role::where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::where('id', $id)->first();
        $permissions = Permission::all();
        return view('roles/edit', compact('permissions','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $role = Role::where('id', $id)->first();
        $validator = Validator::make($request->all(), [
            'name' => 'required|string'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $role->name = $request->name;
        $role->syncPermissions($request->permission_ids);
        $role->save();
        return to_route('roles/index')->with('status', 'Role Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $role = Role::where('id', $id)->first();
        $role->delete();
        return to_route('roles/index')->with('status', 'Role Successfully Deleted');

    }
}
