@extends('layouts.principal')

@section('hijos')

<h1>Modulo de Depositos</h1>

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
        <tr>
            <th>{{$deposito->id}}</th>
            <th>{{$deposito->codEmpleado}}</th>
            <th>{{$deposito->codAfiliado}}</th>
            <th>{{$deposito->fecha}}</th>
            <th>{{$deposito->monto}}</th>
            <th>
            </th>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
