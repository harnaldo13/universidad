@extends('plantilla')

@section('style')
    <center>
        
    <h1>Agregar Aula Nueva</h1>

<form method="POST" action="{{asset('aulas/')}}">

    {{csrf_field()}}

    <div class="form-group">

        <label for="nombre">Ingrese el nombre del Aula</label>
        <input class="form-control col-4" type="text" name="nombre" id="nombre" placeholder="Escriba aqui" required>

    </div>

    <div class="form-group">

        <label for="ubicacion">Ingrese la ubicacion del Aula</label>
        <input class="form-control col-4" type="text" name="ubicacion" id="ubicacion" placeholder="Escriba aqui" required>

    </div>

    <button name="Aula_env" type="submit" class="btn btn-danger" value="btAula">Enviar</button>
    <a href="javascript: history.go(-1)" class="btn btn-danger" role="button">Regresar</a>

</form>
    </center>
@endsection