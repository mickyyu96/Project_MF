@extends('layouts.header')

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
		<div class="col-md-12">
			<p>Jumlah Pengunjung Saat Ini: {{ $jumlah_pengunjung->jumlah_pengunjung }}</p>
			<p>Total Pengunjung: {{ $jumlah_pengunjung->total_pengunjung }}</p>
			<form method="POST" action="{{ url('/add') }}">
			{{ csrf_field() }}
				<button type="submit" class="btn btn-xs btn-primary">+</button>
			</form>
			<form method="POST" action="{{ url('/minus') }}">
			{{ csrf_field() }}
				<button type="submit" class="btn btn-xs btn-primary">-</button>
			</form>
			<form method="POST" action="{{ url('/save') }}">
			{{ csrf_field() }}
				<button type="submit" class="btn btn-xs btn-primary">Save</button>
			</form>
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