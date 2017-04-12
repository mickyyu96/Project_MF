@extends('layouts.base')

@section('title')
    Informasi Customer
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Informasi Customer</h1>
			</div>
		</div>
		<div class="col-md-12" >

			<h3> Jumlah Pengunjung </h3>
			<h1 style="text-align: left;">

			<form method="POST" action="{{ url('/minus') }}" style="display: inline-block; ">
			{{ csrf_field() }}
				<button type="submit" class="btn btn-xl" style="background:#808080;color:#ffffff">-</button>
			</form>

			{{ $jumlah_pengunjung->jumlah_pengunjung }}

			<form method="POST" action="{{ url('/add') }}" style="display: inline-block;">
			{{ csrf_field() }}
				<button type="submit" class="btn btn-xl" style="background:#808080;color:#ffffff">+</button>
			</form>

			<h3>Total Pengunjung hari ini: <strong>{{ $jumlah_pengunjung->total_pengunjung }}</strong></h3>
			<br>
			<form method="POST" action="{{ url('/save') }}">
			{{ csrf_field() }}
				<button type="submit" class="btn" style="width:70;height:40;background:#808080;color:#ffffff">Save</button>
			</form>
			</h1>

			<br><br>

			<table class="table table-striped table-condensed table-hover">
				<thead>
					<tr>
						<th style="width:50%">Tanggal</th>
						<th style="width:50%">Total Pengunjung</th>
					</tr>
				</thead>
				<tbody>
					@foreach($history_pengunjung as $data)
						<tr>
							<td>{{ $data->tanggal }}</td>
							<td>{{ $data->total_pengunjung }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection