@extends('layouts.master')
@section('content')
    <br><h2 align="center" style="color: black"><strong>Registrar Editoriales</strong></h2><br>
    <form action="{{url('editorial/registrar')}}" method="POST">
        @csrf
        <div class="md-form">
            <label><strong>Nombre</strong></label>
            <input required type="text" class="form-control input-sm" id=nombre name="nombre">
        </div>

        <div class="md-form">
            <label><strong>Direccion</strong></label>
            <input required type="text" class="form-control input-sm" id=direccion name="direccion">
        </div>

        <div class="md-form">
            <label><strong>Telefono</strong></label>
            <input required type="text" class="form-control input-sm" id=telefono name="telefono">
        </div>

        <div class="md-form">
            <label><strong>Ciudad</strong></label>
            <select class="custom-select" id="categorias" name="ciudad">
                @foreach($ciudad as $e)
                    <option value="{{$e->id}}">{{$e->nombre}}</option>
                @endforeach
            </select>
            <br></br>
            <button type="submit" class="btn btn-success">Registrar</button>
            <a href="{{url('Editorial)}}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </form>
@stop