@extends('plantilla')

@section('style')
    
    <center>
    <h1>Formulario de Profesores</h1>

<form method="POST" action="{{asset('profesors/')}}">

    {{csrf_field()}}

    <div class="form-group">

        <label for="id">Ingrese el id del profesor</label>
        <input class="form-control col-4" type="text" name="id" id="id" placeholder="Escriba aqui" required>

    </div>

    <div class="form-group">

        <label for="nombre">Ingrese el nombre del profesor</label>
        <input class="form-control col-4" type="text" name="nombre" id="nombre" placeholder="Escriba aqui" required>

    </div>

    <div class="form-group">

        <label for="apellido">Ingrese el apellido del profesor</label>
        <input class="form-control col-4" type="text" name="apellido" id="apellido" placeholder="Escriba aqui" required>

    </div>

    <div class="form-group">

        <label for="titulo">Titulo</label>
        <select name="titulo" id="titulo" class="form-control col-2">
      
            <option value="LIC">LIC</option>
            <option value="ING">ING</option>
            <option value="MSC">MSC</option>
            <option value="DOC">DOC</option>

        </select>

    </div>

    <button name="Profesor_env" type="submit" class="btn btn-danger" value="btProfesor">Enviar</button>
    <a href="javascript: history.go(-1)" class="btn btn-danger" role="button">Regresar</a>

</form>
    </center>

@endsection