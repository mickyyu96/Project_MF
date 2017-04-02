<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainsController extends Controller
{
    public function index() {
    	return view('mains.index');
    }
}
