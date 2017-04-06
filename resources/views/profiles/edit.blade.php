@extends('layouts.base')

@section('title')
    Edit Profil Perusahaan
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profil Perusahaan</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/edit_profile') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-6">
                                <textarea id="deskripsi" type="text" class="form-control" name="deskripsi" required autofocus rows="5">{{ $profil->deskripsi }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required value="{{ $profil->email }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="no_telp" class="col-md-4 control-label">No Telp</label>
                            <div class="col-md-6">
                                <input id="no_telp" type="text" class="form-control" name="no_telp" required value="{{ $profil->no_telp }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="instagram" class="col-md-4 control-label">ID Instagram</label>
                            <div class="col-md-6">
                                <input id="instagram" type="text" class="form-control" name="instagram" required value="{{ $profil->instagram }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-md-4 control-label"> Alamat</label>
                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" required value="{{ $profil->alamat }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="longitude" class="col-md-4 control-label">Longitude</label>
                            <div class="col-md-6">
                                <input id="longitude" type="string" class="form-control" name="longitude" required value="{{ $profil->longitude }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="latitude" class="col-md-4 control-label">Latitude</label>
                            <div class="col-md-6">
                                <input id="latitude" type="string" class="form-control" name="latitude" required value="{{ $profil->latitude }}">
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
