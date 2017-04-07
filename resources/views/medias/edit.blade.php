@extends('layouts.header')

@section('title')
    Edit Publikasi
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Publikasi</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit_publication') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $data->id_publikasi }}">

                        <img src="../uploads/{{ $data->id_publikasi }}" style="width:10%"><br>  
                        <div class="form-group">
                            <label for="file" class="col-md-4 control-label">Select an image</label>
                            <div class="col-md-6">
                                <input id="file" type="file" class="form-control" name="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-6">
                                <textarea id="deskripsi" type="text" class="form-control" name="deskripsi" required autofocus rows="5">{{ $data->deskripsi }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
