<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('id', '!=', 1);
        })->withTrashed()->sortable()->paginate(15);
        return view('history.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('create users')) {
            abort(401);
        }

        $companies = Company::all();
        $roles = Role::where('id', '!=', 1)->get();
        return view('history.users.create', [
            'companies' => $companies,
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        if (!Auth::user()->can('create users')) {
            abort(401);
        }

        $data = $request->all();
        $data['password'] = \Hash::make($request->password);
        $user = User::create($data);
        $role = Role::find($request->role_id);
        $user->assignRole($role->name);
        return redirect()->route('users.index')
                         ->with('success', trans('history.userCreated'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->can('edit users')) {
            abort(401);
        }

        $companies = Company::all();
        $roles = Role::where('id', '!=', 1)->get();
        $user = User::find($id);
        return view('history.users.edit', [
            'companies' => $companies,
            'roles'     => $roles,
            'user'      => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Auth::user()->can('edit users')) {
            abort(401);
        }

        $user = User::find($id);
        $user->update($request->all());
        $role = Role::find($request->role_id);
        $user->syncRoles($role->name);

        return redirect()->route('users.index')
                         ->with('success', trans('history.userUpdated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                         ->with('success', trans('history.userDeleted'));
    }

    /**
     * restore model by id
     *
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        User::withTrashed()->find($id)->restore();
        return redirect()->route('users.index')
                         ->with('success', trans('history.userRestored'));
    }
}
