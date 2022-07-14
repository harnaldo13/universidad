@extends('plantilla')

@section('style')
    
  <center>
  <h1>Rellenar Imparte</h1>

<form method="POST" action="{{asset('impartes/')}}">

    {{csrf_field()}}

    <div class="form-group">

        <label for="codclase">Ingrese el codigo de la clase</label>
        <input class="form-control col-4" type="text" name="codclase" id="codclase" placeholder="Escriba aqui" required>

    </div>

    <div class="form-group">

        <label for="id_aula">Ingrese el id del Aula</label>
        <input class="form-control col-4" type="number" name="id_aula" id="id_aula" placeholder="Escriba aqui" required min="1">

    </div>

    <div class="form-group">

        <label for="id_profesor">Ingrese el id del Profesor</label>
        <input class="form-control col-4" type="text" name="id_profesor" id="id_profesor" placeholder="Escriba aqui" required>

    </div>

    <button name="Imparte_env" type="submit" class="btn btn-danger" value="btImparte">Enviar</button>
    <a href="javascript: history.go(-1)" class="btn btn-danger" role="button">Regresar</a>

</form>
  </center>

@endsection