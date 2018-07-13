@extends('layouts.main')

@section('main')

<form  method="GET" action="{{route('others')}}">
	{{ csrf_field() }}
    <div class="row justify-content-center main-container">
				
		<div class="col-sm-11">
			<h1 class="text-center text-uppercase">Roles del Sistema</h1> <br>
			<br><br>
			<table  class=" table-search hover text-center" style="width:100%">
				<thead class="thead-light">
					<tr>
						<th scope="col">Permiso</th>
						<th scope="col">Descripción</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($role as $role)
					<tr>
						<td scope="row">{{ $role->nameRole}}</td>
						<td scope="row">{{ $role->description}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="text-center col-sm-11">
			<button  class="btn btn-success">Home</button>
		</div>

	</div>
</form>

@endsection