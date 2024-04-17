@extends('layouts.principal')

@section('hijos')

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
        <tr>
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codEmpleado}}</th>
            <th>{{$retiro->codAfiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->monto}}</th>
            <th>
            </th>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
