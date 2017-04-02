<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function showLoginForm() {
    	if (session('state') == 'login') {
            return view('/profile');
    	}
    	else {
    		return view('admins.login');
    	}
    }

    public function login(Request $request) {
    	$username = $request->username;
    	$password = $request->password;

    	$user_exist = DB::table('admin')
    					->where('username', $username)
    					->where('password', $password)
    					->first();

    	if ($user_exist) {
    		session(['state' => 'login']);
    		return redirect('/profile');
    	}
    	else {
            session(['state' => 'logout']);
    		$error = '* login failed';
    		return view('admins.login', compact('error'));
    	}
    }

    public function logout() {
    	session(['state' => 'logout']);
    	return redirect('/');
    }
}
