<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionsRequest;
use App\Permission;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PermissionsController extends Controller
{
    /**
     * Instantiate a new RostsController instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('entrust');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $permissions = Permission::get();
        return view('permissions.admin.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('permissions.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PermissionsRequest $request
     * @return Response
     */
    public function store(PermissionsRequest $request)
    {
        Permission::create($request->only('name', 'display_name', 'description', 'model'));
        return redirect(route('admin.permissions.index'))->with('success' ,'La permission a bien été ajoutée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('permissions.admin.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param PermissionsRequest $request
     * @return Response
     */
    public function update($id, PermissionsRequest $request)
    {
        $permission = Permission::findOrFail($id);
        $permission->update($request->only('name', 'display_name', 'description', 'model'));
        return redirect(route('admin.permissions.index'))->with('success' ,'La permission a bien été mise à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
        return redirect(route('admin.permissions.index'))->with('success', 'La permission a bien été supprimée.');
    }
}
