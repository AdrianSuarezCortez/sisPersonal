@extends('employed.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Editar</h3>
      </div>
    </div>
  </div>
  @if(count($errors)>0)
    <div class="alert alert-danger">
      <strong>Whoooops!!</strong> Parece que hay errores en los datos ingresados.<br>
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {!! Form::model($employe,['method'=>'PATCH','route'=>['employed.update', $employe->id]])!!}
    @include('employed.form') <!--//Manejo de los datos...!-->
  {!! Form::close()!!}

@endsection
