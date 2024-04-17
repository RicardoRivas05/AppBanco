@extends('layouts.principal')

@section('hijos')

<h3>Empleado: {{$empleado->nombre}}  {{$empleado->apellido}} {{$empleado->id}}</h3>
<h3>Modulo de Retiros del Afiliado: {{$afiliado->codAfiliado}}    {{$afiliado->nombre}}  {{$afiliado->apellido}}</h3>
<a href="/retiros/create/{{$empleado->codEmpleado}}/{{$afiliado->codAfiliado}}" class="btn btn-primary">Realizar Retiro</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>CodEmpleado</th>
            <th>CodAfiliado</th>
            <th>Fecha</th>
            <th>Monto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($retiros as $retiro)
        @if($retiro->codAfiliado === $afiliado->codAfiliado)
        <tr>
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codEmpleado}}</th>
            <th>{{$retiro->codAfiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
            <th>
            </th>
        </tr>
        @endif
        @endforeach

    </tbody>
</table>

@endsection
