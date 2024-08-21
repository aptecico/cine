<div class="form-group {{$errors->has('nombre')?'has-error':''}}">
    <label for="nombre" class="control-label">{{'Nombre'}}</label>
    <input class="form-control {{$errors->has('nombre')?'is-invalid':''}}" type="text" name="nombre" id="nombre" value="{{isset($categorias->nombre)?$categorias->nombre:old('nombre')}}">
    {!! $errors->first('nombre', '<div class="invalid-feedback d-block">:message</div>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripción' }}</label>
    <textarea class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : ''}}" rows="5" name="descripcion" type="textarea" id="descripcion" >{{ isset($categorias->descripcion) ? $categorias->descripcion : old('descripcion')}}</textarea>
    {!! $errors->first('descripcion', '<div class="invalid-feedback d-block">:message</div>') !!}
</div>
<br>
<div class="form-group float-right mr-4">
    <input class="btn btn-primary" type="submit" value="{{$formMode==='edit'?'Actualizar':'Guardar'}}">
</div>