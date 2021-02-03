@extends('layouts.master')
@section('content')
    <br><h2 align="center" style="color: black"><strong>Listado Libros</strong></h2>

    <table class="table">
        <thead class="table table-striped table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ISBN</th>
                <th scope="col">Titulo</th>
                <th scope="col">Stock</th>
                <th scope="col">Estado</th>
                <th scope="col">Editorial</th>
                <th scope="col">Precio</th>
                <th scope="col">Descuento</th>
            </tr>
        </thead>
        <tbody class="table table-striped table-secondary">
            @foreach($libro as $l)
                <tr>
                    <td> {{ $l ->id }} </td>
                    <td> {{ $l ->isbn }} </td>
                    <td> {{ $l ->titulo }}</td>
                    <td> {{ $l ->stock }}</td>
                    <td> </td>
                    <td> {{ $l ->editorial }}</td>
                    <td> {{ $l ->precio }}</td>
                    <td> </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop