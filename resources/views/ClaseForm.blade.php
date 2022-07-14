@extends('plantilla')

@section('style')
    
    <center><h1>Agregar Clase Nueva</h1>

<form method="POST" action="{{asset('clases/')}}">

    {{csrf_field()}}

    <div class="form-group">

        <label for="codclase">Ingrese el codigo de la clase</label>
        <input class="form-control col-4" type="text" name="codclase" id="codclase" placeholder="Escriba aqui" required>

    </div>

    <div class="form-group">

        <label for="nombre">Ingrese el nombre de la Clase</label>
        <input class="form-control col-4" type="text" name="nombre" id="nombre" placeholder="Escriba aqui" required>

    </div>

    <div class="form-group">

        <label for="credito">Ingrese el credito de la Clase</label>
        <input class="form-control col-4" type="number" name="credito" id="credito" placeholder="Escriba aqui" min="1" max="3" required value="1">

    </div>

    <button name="Clase_env" type="submit" class="btn btn-danger" value="btClase">Enviar</button>
    <a href="javascript: history.go(-1)" class="btn btn-danger" role="button">Regresar</a>

</form></center>

@endsection