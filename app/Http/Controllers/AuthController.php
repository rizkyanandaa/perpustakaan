<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Models\ModelRole;

class AuthController extends Controller
{
	public function register(){
		$title = 'Register Perpustakaan';
		$role = ModelRole::get();

		return view('auths.register', compact('title', 'role'));
	}

    public function store(Request $request){
        $name = $request->name;
        // $role = $request->role;
        $token = str_random(60);

        User::insert([
            'name' => $name,
            'email' => $request['email'],
            'role' => 1,
            'foto' => 'default.jpg',
            'password' => Hash::make($request['password']),
            'remember_token' => $token,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        toastr()->success('Registrasi berhasil! Silahkan login!');
        return redirect('login');
    }

    public function login(){
    	$title = 'Login Perpustakaan';
        toastr()->success('Login berhasil!');
    	return view('auths.login', compact('title'));
    }

    public function postlogin(Request $request){
    	if (Auth::attempt($request->only('email', 'password'))) {
    		return redirect('beranda');
    	}
    }

    public function logout(){
    	Auth::logout();
    	return redirect('login');
    }
}
