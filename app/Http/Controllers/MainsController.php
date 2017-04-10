<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainsController extends Controller
{
    public function index() {
    	$profil = DB::table('profil')
    				->first();
    	$jumlah_pengunjung = DB::table('jumlah_pengunjung')
    							->first();
    	$list_publikasi = DB::table('publikasi')
    						->orderBy('id_publikasi', 'desc')
    						->limit(3)
    						->get();
    	$publikasi_last = DB::table('publikasi')
    						->orderBy('id_publikasi', 'desc')
    						->first();
    	foreach ($list_publikasi as $publikasi) {
    		if ($publikasi == $publikasi_last) {
    			$publikasi->status = 'active';
    		}
    		else {
    			$publikasi->status = '';
    		}
    	}

    	return view('mains.index')
    		->with(['profil' => $profil,
    				'jumlah_pengunjung' => $jumlah_pengunjung,
    				'list_publikasi' => $list_publikasi]);
    }
}
