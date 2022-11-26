@extends('layout/platilla')
@section('titulo','Crud con laravel 8')
@section('contenido')
<div class="row mt-5">
    <div class="card">
        <div class="card-header">
        <h4>Crud con laravel8</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                    <div class="alert alert-dark" role="alert">
                        {{ $mensaje }}
                      </div>
                    @endif
                    
                </div>
            </div>
        <h5 class="card-title">Lista de alumnos</h5>
        <p class="card-text">
            <p>
                <a href="{{route("personas.create")}}" class="btn btn-success ">Agregar nuevo alumno</a>
            </p>
            <hr>
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                            
                        
                        <tr>
                            <td>{{$item->paterno}}</td>
                            <td>{{$item->materno}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->fecha_nacimiento}}</td>
                            <td>
                                <form action="{{route("personas.edit",$item->id)}}" method="GET">
                                    <button class="btn btn-warning btn-sm">

                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route("personas.show",$item->id)}}" method="GET">
                                    <button class="btn btn-info btn-sm">
                                        
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </p>
            
            </div>
    </div>
</div>
@endsection