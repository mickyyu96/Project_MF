<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index() {
    	if (session('state') == 'login') {
    		$jumlah_pengunjung = DB::table('jumlah_pengunjung')
    								->first();
    		$history_pengunjung = DB::table('history_pengunjung')
    								->orderBy('id', 'desc')
    								->get();

	    	return view('customers.index', compact('jumlah_pengunjung'), compact('history_pengunjung'));
	    }
	    else {
	    	return redirect('/');
	    }
    }

    public function add() {
    	$jumlah_pengunjung = DB::table('jumlah_pengunjung')
    							->first();
    	DB::table('jumlah_pengunjung')
			->where('id', 1)
			->update(['jumlah_pengunjung' => $jumlah_pengunjung->jumlah_pengunjung+1,
				'total_pengunjung' => $jumlah_pengunjung->total_pengunjung+1]);
		return redirect('/customer');
    }

    public function minus() {
    	$jumlah_pengunjung = DB::table('jumlah_pengunjung')
    							->first();
    	DB::table('jumlah_pengunjung')
			->where('id', 1)
			->update(['jumlah_pengunjung' => $jumlah_pengunjung->jumlah_pengunjung-1]);
		return redirect('/customer');
    }

    public function save() {
    	$jumlah_pengunjung = DB::table('jumlah_pengunjung')
    							->first();
    	$time = DB::select(DB::raw('SELECT NOW() AS tanggal'));
		DB::table('history_pengunjung')
			->insert(['tanggal' => $time[0]->tanggal,
				'total_pengunjung' => $jumlah_pengunjung->total_pengunjung]);
    	DB::table('jumlah_pengunjung')
			->where('id', 1)
			->update(['jumlah_pengunjung' => 0,
				'total_pengunjung' => 0]);
		return redirect('/customer');
    }
}
