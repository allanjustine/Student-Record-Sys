<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('fullname')->paginate(5);

        return inertia('users/Index', compact('users'));
    }

    public function create() {
        return inertia('users/Create');
    }

    public function store(Request $request) {
        $request->validate([
            'username'=>'required|unique:users,username',
            'fullname'=>'required',
            'role'=>'required',
            'mobile_number'=>'required',
            'password' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'role' => $request->role,
            'mobile_number' => $request->mobile_number,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/users')->with('Info','A new user has been created.');
    }
}
