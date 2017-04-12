@extends('layouts.base')

@section('title')
    Edit Profil Perusahaan
@endsection

@section('content')
<!-- <div class="container">
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
 -->

<div class="container-fluid">
    <div class="page-header">
        <h1>
            Profile
            </h1>
    </div>
    <form role="form" method="POST" action="{{ url('/edit_profile') }}">
       {{ csrf_field() }}

    <textarea id="deskripsi" type="text" class="form-control" name="deskripsi" required autofocus rows="5" style="resize: none;">{{ $profil->deskripsi }}</textarea>
    <br><br>
    <h2> Contact </h2>  
    <h4>
        {{HTML::image('img/phone.png',"phone" ,array('class' => 'img-rounded','width' => 25, 'height' => 25))}}  <input id="no_telp" type="text"  name="no_telp" required value="{{ $profil->no_telp }}" style="width:300px"></input>
    </h4>

    <h4>{{HTML::image('img/email.png',"email" ,array('class' => 'img-rounded','width' => 25, 'height' => 25))}}
    <input id="email" type="email"  name="email" required value="{{ $profil->email }}" style="width:300px"></input>
    </h4>
    <h4>{{HTML::image('img/Instagram.png',"instagram" ,array('class' => 'img-rounded','width' => 25, 'height' => 25))}}  
    <input id="instagram" type="text" name="instagram" required value="{{ $profil->instagram }}" style="width:300px"></input>
    </h4>
    <br>
    <h2> Location </h2> 
    <table>
        <tr>
            <td rowspan="2" width = "70%" style="padding-right: 50px;" align = "justify">
                 <textarea id="alamat" type="text" class="form-control" name="alamat" required autofocus rows="4" style="resize: none; width:300px"> {{ $profil->alamat }}</textarea> 
            </td>
            <!--
            <th>
              Longitude : <input id="longitude" type="string" name="longitude" required value="{{ $profil->longitude }}">
            </th>
            -->
        </tr>
        <!--
        <tr>
            <th>
                Latitude : <input id="latitude" type="string" name="latitude" required value="{{ $profil->latitude }}">
            </th>
        </tr>
        -->
    </table>
    
    <div class="col-md-8 col-md-offset-10">
        <button type="submit" class="btn" style="width:200;height:50;background:#808080;color:#ffffff">
            SAVE
        </button>
    </div>
    </div>

</div>


 @endsection
