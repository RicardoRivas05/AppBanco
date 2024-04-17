<!DOCTYPE html>
@extends('layouts.principal')

@section('hijos')

<h1>Editar Empleado</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="/empleado/{{$editarEmpleado->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="id">ID</label>
                    <input type="text" name="id" id="id" class="form-control" value="{{$editarEmpleado->id}}">
                </div>

                <div class="mb-3">
                    <label for="codigoEmpleado">Codigo Empleado</label>
                    <input type="text" name="codigoEmpleado" id="codigoEmpleado" class="form-control" value="{{$editarEmpleado->id}}">
                </div>

                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$editarEmpleado->nombre}}">
                </div>

                <div class="mb-3">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" value="{{$editarEmpleado->apellido}}">
                </div>
                <div class="mb-3">
                    <label for="nivel">Nivel</label>
                    <input type="text" name="nivel" id="nivel" class="form-control" value="{{$editarEmpleado->nivel}}">
                </div>
                <div class="mb-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono"  class="form-control" value="{{$editarEmpleado->telefono}}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="/empleado" role="button" class="btn btn-secondary">Regresar</a>
            </form>

        </div>
    </div>

</div>

@endsection
