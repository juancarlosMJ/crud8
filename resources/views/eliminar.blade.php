@extends('layout/platilla')
@section("tituloPagina","Crear un nuevo registro")
@section('contenido')
<div class="comtainer mt-5">
    <div class="card">
        <h5 class="card-header">Eliminar alumno</h5>
        <div class="card-body">
            <p class="card-text">
                <div class="alert alert-secondary" role="alert">
                    Estas seguro de eliminar 
                    <table class="table table-sm table-hover">
                        <thead>
                            <th>apellido paterno</th>
                            <th>apellido materno</th>
                            <th>nombre</th>
                            <th>fecha de nacimiento</th>
                        </thead>
                        <tbody>
                            <tr>
                                <dt>{{$personas->paterno}}</dt>
                                <dt>{{$personas->materno}}</dt>
                                <dt>{{$personas->nombre}}</dt>
                                <dt>{{$personas->fecha_nacimiento}}</dt>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <form action="{{route('personas.destroy',$personas->id)}}">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('personas.index')}}"class="btn btn-info">Regresar</a>
                        <button class="btn btn-danger">eliminar</button>

                    </form>
                  </div>
            </p>
           </div>
      </div>
</div>
@endsection 