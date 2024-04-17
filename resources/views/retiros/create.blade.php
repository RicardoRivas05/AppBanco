@extends('layouts.principal')

@section('hijos')
<h1>Crear Retiro</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="/retiros" method="post">
                @csrf
                <div class="mb-3">
                    <label for="codEmpleado">Codigo Empleado</label>
                    <input type="text" name="codEmpleado" id="codEmpleado" class="form-control" value="{{$id}}">
                </div>

                <div class="mb-3">
                    <label for="codAfiliado">Codigo Afiliado</label>
                    <input type="text" name="codAfiliado" id="codAfiliado" class="form-control" value="{{$id2}}">
                </div>

                <div class="mb-3">
                    <label for="fecha">Fecha</label>
                    <input type="text" name="fecha" id="fecha" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="monto">Monto</label>
                    <input type="text" name="monto" id="monto" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="/empleado" role="button" class="btn btn-secondary">Regresar</a>
            </form>

        </div>
    </div>
</div>

@endsection
