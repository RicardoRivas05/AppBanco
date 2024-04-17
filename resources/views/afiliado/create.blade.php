@extends('layouts.principal')

@section('hijos')

<h1>Crear Afiliado</h1>


<div class="container">
    <div class="row">
        <div class="col">
            <form action="/afiliado" method="post">
                @csrf
                <div class="mb-3">
                    <label for="codigoAfiliado">Codigo Afiliado</label>
                    <input type="text" name="codigoAfiliado" id="codigoAfiliado" class="form-control">
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
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono"  class="form-control">
                </div>
                <div class="mb-3">
                    <label for="edad">Edad</label>
                    <input type="text" name="edad" id="edad"  class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="/afiliado" role="button" class="btn btn-secondary">Regresar</a>
            </form>

        </div>
    </div>
</div>


@endsection
