<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaftarController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
}
