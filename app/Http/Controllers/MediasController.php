<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MediasController extends Controller
{
    public function index() {
    	if (session('state') == 'login') {
	    	$publikasi = DB::table('publikasi')
	    					->orderBy('id_publikasi', 'desc')
    						->get();
    		return view('medias.index', compact('publikasi'));
    	}
    	else {
	    	return redirect('/');
	    }
    }

    public function add(Request $request) {
    	$time = DB::select(DB::raw('SELECT NOW() AS tanggal'));

    	DB::table('publikasi')
    		->insert(['deskripsi' => $request->deskripsi,
    					'id_admin' => session('id_admin'),
    					'created_at' => $time[0]->tanggal]);
    	$id = DB::table('publikasi')
    			->where('created_at', $time[0]->tanggal)
    			->first();

    	$file = $request->file('img');
    	$file->move(public_path("uploads"), $id->id_publikasi);

    	return redirect('/media');
    }

    public function showEditForm($id_publikasi) {
    	if (session('state') == 'login') {
	    	$data = DB::table('publikasi')
	    				->where('id_publikasi', $id_publikasi)
	    				->first();

	    	return view('medias.edit', compact('data'));
	    }
	    else {
	    	return redirect('/');
	    }
    }

    public function edit(Request $request) {
    	if ($request->hasfile('file')) {
    		$file = $request->file('file');
	    	$file->move(public_path("uploads"), $request->id);
	    }

	    DB::table('publikasi')
    		->where('id_publikasi', $request->id)
    		->update(['deskripsi' => $request->deskripsi]);

    	return redirect('/media');
    }

    public function delete($id_publikasi) {
    	DB::table('publikasi')
    		->where('id_publikasi', $id_publikasi)
    		->delete();
    	File::delete("uploads/".$id_publikasi);
    	return redirect('/media');
    }
}
