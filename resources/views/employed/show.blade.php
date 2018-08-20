@extends('employed.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Empleado</h3> <a class="btn btn-xs btn-primary" href="{{ route('employed.index')}}">Regresar</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12">
      <div class="form-group">
        <strong>Nombre :</strong>
        {{ $employe->nombre}}
      </div>
    </div>
  </div>
@endsection
