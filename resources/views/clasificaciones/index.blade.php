@extends('layouts.app')

@section('content')
	{{--Aqui es el contedido de la vista--}}
	<div class="container">
		<div class="card">
		  <div class="card-header">
		    Clasificación
		  </div>
		  <div class="card-body">
		  	<table class="table table-striped table-hover">
		  		<thead>
		  			<tr>
		  				<th>#</th>
		  				<th>Nombre</th>
		  				<th>Descripción</th>
		  				<th>Acciones</th>
		  			</tr>
		  		</thead>
		  		<tbody>
		  			@foreach ($clasificacion as $item)
				    <tr>
				    	<td>{{ $loop->iteration}}</td>
				    	<td>{{$item->nombre}}</td>
				    	<td>{{$item->descripcion}}</td>
				    	<td>
		<a href="{{url('clasificacion/'.$item->id.'/edit')}}" >
			<button class="btn btn-primary"><i class="fas fa-pencil-alt"></i>Editar</button>
		</a>
				    	</td>
				    </tr>
					@endforeach
		  		</tbody>
		  	</table>

		    
		  </div>
		</div>
	</div>
	
@endsection()


