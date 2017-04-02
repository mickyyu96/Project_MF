@extends('layouts.header')

@section('title')
    Profil Perusahaan
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Profil Perusahaan</h1>
				<a class="btn btn-xs btn-primary" href="{{ url('/edit_profile') }}">Edit</a>
			</div>
		</div>
		<div class="col-md-12">
			<p>{{ $profil->deskripsi }}</p>
			<p>Email: {{ $profil->email }}</p>
			<p>No Telp: {{ $profil->no_telp }}</p>
			<p>Instagram: {{ $profil->instagram }}</p>
			<p>Alamat: {{ $profil->alamat }}</p>
			<p>Longitude: {{ $profil->longitude }}</p>
			<p>Latitude: {{ $profil->latitude }}</p>
		</div>
	</div>
</div>
@endsection