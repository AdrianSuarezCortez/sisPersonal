<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Nombre : </strong>
      {!! Form::text('nombre', null, ['placeholder'=>'Ingrese nombre...','class'=>'form-control'])!!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Apellido Paterno : </strong>
      {!! Form::text('a_paterno', null, ['placeholder'=>'Ingrese apellido paterno...','class'=>'form-control'])!!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Apellido materno : </strong>
      {!! Form::text('a_materno', null, ['placeholder'=>'Ingrese apellido materno...','class'=>'form-control'])!!}
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('employed.index')}}">Regresar</a>
    <button type="submit" class="btn btn-xs btn-primary">Enviar</button>
  </div>
</div>
