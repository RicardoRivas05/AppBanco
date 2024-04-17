@extends('layouts.principal')

@section('hijos')

<h3>Empleado: {{$empleado->nombre}}  {{$empleado->apellido}} {{$empleado->id}}</h3>
<h3>Modulo de Depositos del Afiliado: {{$afiliado->id}}    {{$afiliado->nombre}}  {{$afiliado->apellido}}</h3>
<a href="/depositos/create/{{$empleado->codEmpleado}}/{{$afiliado->codAfiliado}}" class="btn btn-primary">Realizar Deposito</a>
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
        @foreach($depositos as $deposito)
        @if($deposito->codAfiliado === $afiliado->codAfiliado)
        <tr>
            <th>{{$deposito->id}}</th>
            <th>{{$deposito->codEmpleado}}</th>
            <th>{{$deposito->codAfiliado}}</th>
            <th>{{$deposito->fecha}}</th>
            <th>{{$deposito->monto}}</th>
            <th>
            </th>
        </tr>
        @endif
        @endforeach

    </tbody>
</table>

@endsection
