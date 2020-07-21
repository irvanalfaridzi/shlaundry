<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DaftarController extends Controller
{
    public function store(Request $request)
    {
        dd($request);
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $gender = $request->get('gender');
        $phone = $request->get('phone');
        $country = $request->get('country');
        $city = $request->get('city');
        $postalcode = $request->get('postalcode');
        $address = $request->get('address');

        Customer::create([
            'firstname'     => $firstname,
            'lastname'      => $lastname,
            'gender'        => $gender,
            'phone'         => $phone,
            'country'       => $country,
            'city'          => $city,
            'postalcode'    => $postalcode,
            'address'       => $address,
        ]);

        $role_id = $request->get('role');
        $username = $request->get('username');
        $email = $request->get('email');
        $password = Hash::make($request->get('password'));

        DB::table('users')->insert([
            'role_id' => $role_id,
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);

        return redirect('user')->with('success', 'Data telah terkirim');
    }
}
