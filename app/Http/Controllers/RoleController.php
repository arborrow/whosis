<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class RoleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$this->authorize('show-role');
        $roles = \App\Models\Role::orderBy('name')->paginate();

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$this->authorize('create-role');

        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoleRequest $request)
    {
        //$this->authorize('create-role');

        $role = new \App\Models\Role;
        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');

        $role->save();

        \Session::flash('flash.banner', $role->name. ' ' . __('saved'));

        return Redirect::action('RoleController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$this->authorize('show-role');

        $role = \App\Models\Role::with('users', 'permissions')->findOrFail($id);
        $permissions = \App\Models\Permission::orderBy('name')->pluck('name', 'id');
        $users = \App\Models\User::orderBy('name')->pluck('name', 'id');

        return view('admin.roles.show', compact('role', 'permissions', 'users')); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('update-role');

        $role = \App\Models\Role::findOrFail($id);

        return view('admin.roles.edit', compact('role')); //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoleRequest $request, $id)
    {
        //$this->authorize('update-role');
        $role = \App\Models\Role::findOrFail($request->input('id'));
        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');
        $role->save();

        \Session::flash('flash.banner', $role->name. ' ' . __('updated'));
        \Session::flash('flash.bannerStyle', 'success');

        return Redirect::action('RoleController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->authorize('delete-role');

        $role = \App\Models\Role::findOrFail($id);
        \App\Models\Role::destroy($id);

        \Session::flash('flash.banner', $role->name. ' ' . __('deleted'));
        \Session::flash('flash.bannerStyle', 'warning');

        return Redirect::action('RoleController@index');
    }

    public function update_permissions(Request $request)
    {
        // $this->authorize('update-role');
        
        $role = \App\Models\Role::findOrFail($request->input('id'));
        $role->permissions()->detach();
        $role->permissions()->sync($request->input('permissions'));

        \Session::flash('flash.banner', __('Permissions updated for role') . ': ' . $role->name);

        return Redirect::action('RoleController@index');
    }

    public function update_users(Request $request)
    {
        // $this->authorize('update-role');
        $role = \App\Models\Role::findOrFail($request->input('id'));
        $role->users()->detach();
        $role->users()->sync($request->input('users'));

        \Session::flash('flash.banner', __('Users updated for role') . ': ' . $role->name);

        return Redirect::action('RoleController@index');
    }
}
