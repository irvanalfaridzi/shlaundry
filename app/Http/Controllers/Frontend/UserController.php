<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('frontend.user.index',
        [
            'users' => $users,
            'roles' => $roles,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        $roles = Role::all();
        return view('frontend.user.create',
        [
            'employees' => $employees,
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $role_id = $request->get('role');
        $employee_id = $request->get('name');
        $username = $request->get('username');
        $email = $request->get('email');
        $password = Hash::make($request->get('password'));

        DB::table('users')->insert([
            'role_id' => $role_id,
            'employee_id' => $employee_id,
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);

        return redirect('user')->with('success', 'Data telah terkirim');
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
        $user = User::find($id);
        $employees = Employee::all();
        $roles = Role::all();

        return view('frontend.user.edit',
        [
            'employees' => $employees,
            'user' => $user,
            'roles' => $roles,
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
        $role_id = $request->get('role');
        $employee_id = $request->get('name');
        $username = $request->get('username');
        $email = $request->get('email');
        $password = Hash::make($request->get('password'));

        DB::table('users')->where('id', '=', $id)->update([
            'role_id' => $role_id,
            'employee_id' => $employee_id,
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);

        return redirect('user')->with('success', 'Data telah terkirim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
