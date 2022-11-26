@extends('layout/platilla')
@section("tituloPagina","Crear un nuevo registro")
@section('contenido')
<div class="comtainer mt-5">
    <div class="card">
        <h5 class="card-header">Agregar nuevo</h5>
        <div class="card-body">
            <p class="card-text">
                <form action="{{route('personas.store')}}" method="POST">
                    @csrf
                    <label for="">Apellido paterno</label>
                    <input type="text" name="paterno" class="form-control"required>
                    <label for="">Apellido materno</label>
                    <input type="text" name="materno" class="form-control"required>
                    <label for="">nombre</label>
                    <input type="text" name="nombre" class="form-control"required>
                    <label for="">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control"required>
                    <br>
                    <a href="{{route('personas.index')}}"class="btn btn-warning">Regresar</a>
                    <button class="btn btn-primary">Agregar</button>
                </form>
            </p>
           </div>
      </div>
</div>
@endsection 