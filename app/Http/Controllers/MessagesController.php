<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index() {
    	if (session('state') == 'login'){
    		$list_komentar = DB::table('komentar')
                                ->orderBy('id_komentar', 'desc')
    							->get();

    		return view('messages.index', compact('list_komentar'));
    	}
    	else {
    		return redirect('/');
    	}
    }

    public function delete($id_komentar) {
    	DB::table('komentar')
    		->where('id_komentar', $id_komentar)
    		->delete();
    	return redirect('/message');
    }

    public function add(Request $request) {
        $time = DB::select(DB::raw('SELECT NOW() AS tanggal'));
        DB::table('komentar')
            ->insert(['nama' => $request->name,
                    'email' => $request->email,
                    'judul' => $request->subject,
                    'konten' => $request->content,
                    'created_at' => $time[0]->tanggal]);
        return redirect('/');
    }
}
