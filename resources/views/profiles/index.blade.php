
@section('title')
    Profil Perusahaan
@endsection
@extends('layouts.base')

@section('content')
<div class="container-fluid">
	<div class="page-header">
		<h1>
			Profile
			<a href="{{ url('/edit_profile') }}">
				{{HTML::image('img/edit-button.png',"edit button" ,array('class' => 'img-rounded','width' => 30, 'height' => 30))}}
			</a>
		</h1>
	</div>
	<p>{{ $profil->deskripsi }}</p>
	<br><br>
	<h2> Contact </h2>	
	<h4>{{HTML::image('img/phone.png',"phone" ,array('class' => 'img-rounded','width' => 25, 'height' => 25))}}  {{ $profil->no_telp }}</h4>

	<h4>{{HTML::image('img/email.png',"email" ,array('class' => 'img-rounded','width' => 25, 'height' => 25))}}  {{ $profil->email }}</h4>
	<h4>{{HTML::image('img/Instagram.png',"instagram" ,array('class' => 'img-rounded','width' => 25, 'height' => 25))}}  {{ $profil->instagram }}</h4>
	<br>
	<h2> Location </h2>	
	<table>
		<tr>
			<td rowspan="2" width = "50%" style="padding-right: 50px;" align = "justify">{{ $profil->alamat}}</td>
			<!-- <th>Longitude: {{ $profil->longitude }}</th> -->
		</tr>
		<!--
		<tr>
			<th>Latitude : {{ $profil->latitude }}</th>
		</tr>
		-->
	</table>
	
</div>
@endsection