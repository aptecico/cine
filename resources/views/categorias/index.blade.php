@extends('layouts.app')

@section('content')
	{{--Aqui es el contedido de la vista--}}
	<div class="container">
		<div class="card">
		  <div class="card-header">
		    Categorias
		  </div>
		  <div class="card-body">
		  	<table class="table table-striped table-hover">
		  		<thead>
		  			<tr>
		  				<th>#</th>
		  				<th>Nombre</th>
		  				<th>Descripción</th>
		  				<th>Acciones  
							<a href="{{url('categorias/create')}}" class="btn btn-success ml-4" title="Crear nuevo registro">
								<i class="fa fa-plus"></i> Nuevo </a>
						</th>
		  			</tr>
		  		</thead>
		  		<tbody>
		  			@foreach ($categorias as $item)
				    <tr>
				    	<td>{{ $loop->iteration}}</td>
				    	<td>{{$item->nombre}}</td>
				    	<td>{{$item->descripcion}}</td>
				    	<td>
		<a href="{{url('categorias/'.$item->id.'/edit')}}" >
			<button class="btn btn-primary"><i class="fas fa-pencil-alt"></i>Editar</button>
		</a>
		
		<form method="POST" action="{{ url('/categorias' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
			{{ method_field('DELETE') }}
			{{ csrf_field() }}
			<button type="submit" class="btn btn-danger btn-sm" title="Delete Gasto" onclick="return confirm(&quot;Confirm Eliminar?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i>Eliminar </button>
		</form>

				    	</td>
				    </tr>
					@endforeach
		  		</tbody>
		  	</table>

		    
		  </div>
		</div>
	</div>
	
@endsection()


