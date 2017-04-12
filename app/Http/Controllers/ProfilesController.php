<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index() {
    	if (session('state') == 'login') {
    		$profil = DB::table('profil')
    					->first();

	    	return view('profiles.index', compact('profil'));
	    }
	    else {
	    	return redirect('/');
	    }
    }

    public function showEditForm() {
    	if (session('state') == 'login') {
    		$profil = DB::table('profil')
    					->first();

	    	return view('profiles.edit', compact('profil'));
    	}
    	else {
    		return redirect('/');
    	}
    }

    public function edit(Request $request) {
        DB::table('profil')
            ->where('id_profil', 1)
            ->update(['deskripsi' => $request->deskripsi,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'instagram' => $request->instagram,
                'alamat' => $request->alamat]);

        return redirect('/profile');
    }
}
