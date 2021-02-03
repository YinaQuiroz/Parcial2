@extends('layouts.master')
@section('content')
	<br><h1 align="center" style="color: green"><strong>Libreria Nacional</strong></h1><br><br>
	<div>
		<div class="card-deck">
		  <div class="card">
		    <img src="{{url('imagenes/foto1.jpg')}}" class="d-block w-100" height="200" >
		    <div class="card-body">
                <h5><strong>Nosotros</strong></h5>
                <h6 aling="justify">Contamos con 250 Proveedores y Editoriales entre las cuales estan las más representativas del mundo editorial en lengua española e inglesa.</h6>
		    </div>
		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/foto2.jpg')}}" class="d-block w-100" height="200">
		    <div class="card-body">
                <h5><strong>Historia</strong></h5>
                <h6 aling="justify">La Libreria Nacional de Colombia fue fundada en la ciudad de Barranquilla en Septiembre de 1941, es una de las pioneras en la modalidad del autoservicio, venta y distribucion de revistas en el pais.</h6>
		    </div>

		  </div>
		  <div class="card">
		    <img src="{{url('imagenes/foto3.jpg')}}" class="d-block w-100" height="200">
		    <div class="card-body">
                <h5><strong>Servicios</strong></h5>
                <h6 aling="justify">Mensualmente recibimos un promedio de 500 novedades diversas, entre los que destacan los libros de mayor venta en todo el mundo los bestsell de exito siempre estan primero en nuestra libreria.</h6>
		    </div>
		  </div>
		</div>
        <div align="center">
    <a href="{{ url('/') }}"> Regresar </a>
</div>
	</div><br>
    
@stop