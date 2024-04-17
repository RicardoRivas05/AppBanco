@extends('layouts.principal')

@section('hijos')

<h1>Crear Empleado</h1>


<div class="container">
    <div class="row">
        <div class="col">
            <form action="/empleado" method="post">
                @csrf
                <div class="mb-3">
                    <label for="codigoEmpleado">Codigo Empleado</label>
                    <input type="text" name="codigoEmpleado" id="codigoEmpleado" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nivel">Nivel</label>
                    <input type="text" name="nivel" id="nivel" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono"  class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="/empleado" role="button" class="btn btn-secondary">Regresar</a>
            </form>

        </div>
    </div>
</div>


@endsection
