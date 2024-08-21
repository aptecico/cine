@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
         <a href="{{url('categorias')}}" title="Atrás">
            <button type="button" class="btn btn-warning mr-4">Atrás</button>
         </a>
          Crear nuevo registro
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('categorias')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}

                @include('categorias.form',['formMode'=>'create'])
            </form>
        </div>
    </div>
</div>
@endsection