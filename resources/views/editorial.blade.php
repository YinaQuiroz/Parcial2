@extends('layouts.master')
@section('content')
    <br><h2 align="center" style="color: black"><strong>Listado Editoriales</strong></h2><br>
    <h3 align="right">
        <button class="btn btn-success my-2 my-sm-0" type="submit"><strong>REGISTRAR</strong></button>
    </h3>
    <table class="table">
        <thead class="table table-striped table-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody class="table table-striped table-secondary">
            @foreach($editorial as $e)
                <tr>
                    <td> {{ $e ->id }} </td>
                    <td> {{ $e ->nombre }} </td>
                    <td> {{ $e ->direccion }}</td>
                    <td> {{ $e ->ciudad }}</td>
                    <td> {{ $e ->telefomo }}</td>
                    <td> </td>
                    <td> <button class="btn btn-warning my-sm-0" type="submit"><strong>ACTUALIZAR</strong></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop