<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function showLoginForm() {
    	if (session('state') == 'logout') {
    		return view('admins.login');
    	}
    	else {
    		return redirect('/profile');
    	}
    }

    public function login(Request $request) {
    	$username = $request->username;
    	$password = $request->password;

    	$user_exist = DB::table('users')
    					->where('username', $username)
    					->where('password', $password)
    					->first();

    	if ($user_exist) {
    		session(['state' => 'login']);
    		return view('profiles.index');
    	}
    	else {
    		$error = '* login failed';
    		return view('admins.login', compact('error'));
    	}
    }

    public function logout() {
    	session(['state' => 'logout']);
    	return redirect('/');
    }
}
