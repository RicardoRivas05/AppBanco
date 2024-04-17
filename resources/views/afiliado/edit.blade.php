<!DOCTYPE html>
@extends('layouts.principal')

@section('hijos')

<h1>Editar Empleado</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="/afiliado/{{$editarAfiliado->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id">ID</label>
                    <input type="text" name="id" id="id" class="form-control" value="{{$editarAfiliado->id}}">
                </div>

                <div class="mb-3">
                    <label for="codigoAfiliado">Codigo Afiliado</label>
                    <input type="text" name="codigoAfiliado" id="codigoAfiliado" class="form-control" value="{{$editarAfiliado->id}}">
                </div>

                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$editarAfiliado->nombre}}">
                </div>

                <div class="mb-3">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="{{$editarAfiliado->apellido}}">
                </div>
                <div class="mb-3">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{$editarAfiliado->ciudad}}">
                </div>
                <div class="mb-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono"  class="form-control" value="{{$editarAfiliado->telefono}}">
                </div>
                <div class="mb-3">
                    <label for="edad">Edad</label>
                    <input type="text" name="edad" id="edad"  class="form-control" value="{{$editarAfiliado->edad}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="/afiliado" role="button" class="btn btn-secondary">Regresar</a>
            </form>

        </div>
    </div>

</div>

@endsection
