@extends('employed.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Agregar</h3>
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

  {!! Form::open(['route' => 'employed.store', 'method' => 'POST'])!!}
    @include('employed.form') <!--//Manejo de los datos...!-->
  {!! Form::close()!!}

@endsection
