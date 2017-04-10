@extends('layouts.base')

@section('title')
    Media Publikasi
@endsection

@section('content')
	<div class = "container">
		<div class ="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>Komentar</h1>
				</div>
			</div>
		</div>

		@foreach ($list_komentar as $komentar)
		<div class="panel panel-default">
			<div class = "panel-body">
        		<table style="width: 100%">
	        		<tr>
	        			<th style="width: 50%;font-size: 24;">{{ $komentar->nama }}</th>
	        			<td style="width: 50%;text-align:right">
		        			<form method="POST" action="{{ url('/delete_message') }}/{{ $komentar->id_komentar }}" style="display: inline">{{ csrf_field() }}
		        			<input type="image" src="img/trash.png" alt="Submit" width="30" height="30">
		        			</form>
	        			</td>
	                </tr>
	                <tr>
	                	<td colspan="2">{{ $komentar->email }}</td>
	                </tr>
	                <tr>
	                	<td></td>
	                	<td style="text-align: right">Submited on {{ $komentar->created_at }}</td>
	                </tr>
	                <tr>
	                	<th colspan="2" style="font-size: 20">{{ $komentar->judul }}</th>
	                </tr>
	                <tr>
	                	<td colspan="2">{{ $komentar->konten }}</td>
	               	</tr>
             	</table>
        	</div>
		</div>
	    @endforeach
	</div>
@endsection