<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index(){
    	if(session('state') == 'login'){
    		return view('messages.index');
    	}else{
    		return redirect('/');
    	}

    }

}
