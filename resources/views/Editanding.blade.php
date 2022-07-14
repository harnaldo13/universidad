@extends('plantilla')

@section('style')

    @if ($num==1)
        
        <i><b><h3>Formulario de Clases</h3></b></i>

        <form method="POST" action="{{Route('clases.update',['clase' => $datos->codclase])}}">

            {{csrf_field()}}

            @method('PATCH')

            <div class="form-group">

                <label for="codclase">Ingrese el codigo de la clase</label>
                <input class="form-control col-4" type="text" name="codclase" id="codclase" placeholder="Escriba aqui" required value="{{$datos->codclase}}" readonly>

            </div>
        
            <div class="form-group">

                <label for="nombre">Ingrese el nombre de la Clase</label>
                <input class="form-control col-4" type="text" name="nombre" id="nombre" placeholder="Escriba aqui" required value="{{$datos->nombre}}">

            </div>

            <div class="form-group">

                <label for="credito">Ingrese el credito de la Clase</label>
                <input class="form-control col-4" type="number" name="credito" id="credito" placeholder="Escriba aqui" min="1" max="3" required value="1" value="{{$datos->credito}}">

            </div>

            <button name="Clase_env" type="submit" class="btn btn-primary" value="btClase">Enviar</button>
            <a href="javascript: history.go(-1)" class="btn btn-primary" role="button">Regresar</a>

        </form>

    @endif
    
    @if ($num==2)
        
        <i><b><h3>Formulario de Aulas</h3></b></i>

        <form method="POST" action="{{Route('aulas.update',['aula' => $datos->id])}}">

            {{csrf_field()}}

            @method('PATCH')
        
            <div class="form-group">

                <label for="nombre">Ingrese el nombre del Aula</label>
                <input class="form-control col-4" type="text" name="nombre" id="nombre" placeholder="Escriba aqui" required value="{{$datos->nombre}}">

            </div>

            <div class="form-group">

                <label for="ubicacion">Ingrese la ubicacion del Aula</label>
                <input class="form-control col-4" type="text" name="ubicacion" id="ubicacion" placeholder="Escriba aqui" required value="{{$datos->ubicacion}}">

            </div>

            <button name="Aula_env" type="submit" class="btn btn-primary" value="btAula">Enviar</button>
            <a href="javascript: history.go(-1)" class="btn btn-primary" role="button">Regresar</a>

        </form>

    @endif

    @if ($num==3)
        
        <i><b><h3>Formulario de Profesores</h3></b></i>

        <form method="POST" action="{{Route('profesors.update', ['profesor' => $datos->id])}}">

            {{csrf_field()}}

            @method('PATCH')

            <div class="form-group">

                <label for="id">Ingrese el id del profesor</label>
                <input class="form-control col-4" type="text" name="id" id="id" placeholder="Escriba aqui" required value="{{$datos->id}}" readonly>

            </div>
        
            <div class="form-group">

                <label for="nombre">Ingrese el nombre del profesor</label>
                <input class="form-control col-4" type="text" name="nombre" id="nombre" placeholder="Escriba aqui" required value="{{$datos->nombre}}">

            </div>

            <div class="form-group">

                <label for="apellido">Ingrese el apellido del profesor</label>
                <input class="form-control col-4" type="text" name="apellido" id="apellido" placeholder="Escriba aqui" required value="{{$datos->apellido}}">

            </div>

            <div class="form-group">

                <label for="titulo">Titulo</label>
                <select name="titulo" id="titulo" class="form-control col-2" value="{{$datos->titulo}}">
            
                    <option value="LIC">LIC</option>
                    <option value="ING">ING</option>
                    <option value="MSC">MSC</option>
                    <option value="DOC">DOC</option>
        
                </select>

            </div>

            <button name="Profesor_env" type="submit" class="btn btn-primary" value="btProfesor">Enviar</button>
            <a href="javascript: history.go(-1)" class="btn btn-primary" role="button">Regresar</a>

        </form>

    @endif

@endsection