@extends('employed.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Empleados</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="pull-right">
        <a class="btn btn-xs btn-success" href="{{route('employed.create')}}">Agregar empleado</a>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>num.</th>
      <th>Nombre</th>
      <th>A paterno</th>
      <th>A materno</th>
      <th width= "300px">Opciones</th>
    </tr>

    @foreach ($employed as $employe)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $employe->nombre}}</td>
        <td>{{ $employe->a_paterno}}</td>
        <td>{{ $employe->a_materno}}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('employed.show', $employe->id )}}">Ver</a>
          <a class="btn btn-xs btn-primary" href="{{ route('employed.edit', $employe->id )}}">Editar</a>

          {!! Form::open(['method' => 'DELETE', 'route' => ['employed.destroy', $employe->id], 'style' => 'display:inline'])!!}
          {!! Form::submit('Delete',['class'=>'btn btn-xs btn-danger'])!!}
          {!! Form::close()!!}
        </td>
      </tr>
    @endforeach
  </table>
  {!! $employed->links()!!}
@endsection
