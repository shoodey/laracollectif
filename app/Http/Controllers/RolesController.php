<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolesRequest;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RolesController extends Controller
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
        $roles = Role::get();
        return view('roles.admin.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('roles.admin.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RolesRequest $request
     * @return Response
     */
    public function store(RolesRequest $request)
    {
        $role = Role::create($request->only('name', 'display_name', 'description'));
        if(!empty($request->all()['permissions'])){
            $role->perms()->sync(array_keys($request->all()['permissions']));
        }
        return redirect(route('admin.roles.index'))->with('success' ,'Le rôle a bien été ajouté.');
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
        $role = Role::findOrFail($id);
        $role->load('perms');
        $permissions = Permission::get();
        return view('roles.admin.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param RolesRequest $request
     * @return Response
     */
    public function update($id, RolesRequest $request)
    {
        $role = Role::findOrFail($id);
        if(!empty($request->all()['permissions']))
            $role->perms()->sync(array_keys($request->all()['permissions']));
        $role->update($request->only('name', 'display_name', 'description'));
        return redirect(route('admin.roles.index'))->with('success' ,'Le rôle a bien été mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect(route('admin.roles.index'))->with('success', 'Le rôle a bien été supprimé.');
    }
}
