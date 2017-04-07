@extends('layouts.base')

@section('title')
    Media Publikasi
@endsection

@section('content')
<div class="container">
		<div class ="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>Media Publikasi</h1>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class = "panel-body">
				<form role="form" method="POST" action="{{ url('/add_publication') }}" enctype="multipart/form-data" style="display:inline-block;">
					{{ csrf_field() }}
					<div class="input-group" style="display:inline-block;">
	        		<table>
	        		<tr>
	                        <td style="width: 10%"> <input id="img" type="file" name="img" required style="display:inline-block;"></input</td>
	                        <td style="width: 70%"> <textarea id="deskripsi" type="text" class="form-control" name="deskripsi" required autofocus rows="6"></textarea></td>
	                        <td style="width: 20px;padding-left: 50px;padding-bottom: 100px">
	                        <input type="image" src="img/save-icon.png" alt="Submit" width="40" height="40"></input>	</td>
	                </tr>
	             	</table>
	                </div>
				</form>
			</div>
		</div>
		<br>
		<br>
		@foreach($publikasi as $data)
			<div class="panel panel-default">
				<div class = "panel-body">
						{{ csrf_field() }}
						<div class="input-group" style="display:inline-block;">
		        		<table>
		        		<tr >
		                        <td style="width: 30%" rowspan="2"> <img src="uploads/{{ $data->id_publikasi }}" style="width:90%">
		                        <th style="width: 70%,height: 10px">Created at: {{ $data->created_at }} 
		                        </th>
		                        <td style="width: 35px">
		                        	<a  href="{{ url('/edit_publication') }}/{{ $data->id_publikasi }}">
		                        	<img src="img/edit-button.png" width="30" height="30"></a>
		                        </td>
		                        <td style="width: 35px">
                    			<form method="POST" action="{{ url('/delete_publication') }}/{{ $data->id_publikasi }}" style="display: inline">{{ csrf_field() }}

		                        <input type="image" src="img/trash.png" alt="Submit" width="30" height="30">
		                        </form>

		                        </td>
		                </tr>
		                <tr>
		                	<td colspan="3" style="height : 200px">
		                		{{ $data->deskripsi }}
		                	</td>		                	

		                </tr>
		             	</table>
		                </div>
					
				</div>
			</div>
			@endforeach
	
</div>
@endsection