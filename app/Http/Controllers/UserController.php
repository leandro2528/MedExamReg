<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('id', 'desc')->get();
        return view('users.index', 
    
        [
            'users'=>$users
        ]
    );

    }

    public function create() {
        $users = User::all();
        return view('users.create',
    
        [
            'users'=>$users
        ]
    );

    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('users-index');
    }

    public function edit($id) {
        $users = User::where('id', $id)->first();
        return view('users.edit',
    
        [
            'users'=>$users
        ]
    );

    }

    public function update(Request $request, $id) {
        $date = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];

        $users = User::where('id', $id)->update($date);
        return redirect()->route('users-index');
    }

    public function destroy($id) {
        $users = User::where('id', $id)->delete();
        return redirect()->route('users-index');
    }
}
