@extends('layouts.header')

@section('title')
    Media Publikasi
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>Media Publikasi</h1>
			</div>
		</div>
		<div class="col-md-12">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/add_publication') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
                    <label for="img" class="col-md-4 control-label">Select an image</label>
                    <div class="col-md-6">
                        <input id="img" type="file" class="form-control" name="img" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>
                    <div class="col-md-6">
                        <textarea id="deskripsi" type="text" class="form-control" name="deskripsi" required autofocus rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Add Publication
                        </button>
                    </div>
                </div>
			</form>
		</div>
		<div class="col-md-12">
			@foreach($publikasi as $data)
				<img src="uploads/{{ $data->id_publikasi }}" style="width:10%"><br>
				<p>Created at: {{ $data->created_at }}</p>
				<p>Deskripsi: {{ $data->deskripsi }}</p>
				<a class="btn btn-xs btn-primary" href="{{ url('/edit_publication') }}/{{ $data->id_publikasi }}">Edit</a>
				<form method="POST" action="{{ url('/delete_publication') }}/{{ $data->id_publikasi }}">
				 {{ csrf_field() }}
					<button type="submit" class="btn btn-xs btn-primary">Delete</button>
				</form>
				<hr>
			@endforeach
		</div>
	</div>
</div>
@endsection