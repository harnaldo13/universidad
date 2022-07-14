@extends('/plantilla')

@section('style')
   
    @if ($num == 1)
                <h3>Nombre de la clase: {{$datos->nombre}}</h3>
                <h2>Código: {{$datos->codclase}}</h2>
                <h2>Crédito: {{$datos->credito}}</h2>

         
                <form action="{{Route('clases.destroy',['clase' => $datos->codclase])}}" method="POST">
                    {{csrf_field()}}
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" >Eliminar</button>
                    <a href="javascript: history.go(-1)" class="btn btn-primary" role="button">Regresar</a>

                </form>
    @endif

    @if ($num == 2)
        
            <h2>Nombre del Aula: {{$datos->nombre}}</h2>
            <h2>ID: {{$datos->id}}</h2>

            <h2>Ubicación: {{$datos->ubicacion}}</h2>


            <form action="{{Route('aulas.destroy',['aula' => $datos->id])}}" method="POST">

                {{csrf_field()}}

                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar</button>
                <a href="javascript: history.go(-1)" class="btn btn-primary" role="button">Regresar</a>
            </form>


    @endif

    @if ($num == 3)
        
            <h3><b><i>{{$datos->nombre . " " . $datos->apellido}}</i></b></h3>

            <h2>ID: {{$datos->id}}</h2>

            <h2>Titulo: {{$datos->titulo}}</h2>


            <form action="{{Route('profesors.destroy',['profesor' => $datos->id])}}" method="POST">

                {{csrf_field()}}

                @method('DELETE')

                <a href="{{asset('/Home')}}" class="btn btn-primary" role="button">Inicio</a>
                <button class="btn btn-danger" type="submit">Eliminar</button>

            </form>

    @endif

    @if ($num == 4)  
        
        <div class="card-header">
            <h3><b><i>Tabla Imparte</i></b></h3>
        </div>

        <table class="table">
            
            <thead>
                <th scope="col">Cod_clase</th>
                <th scope="col">ID_aula</th>
                <th scope="col">ID_profesor</th>
            </thead>

            <tbody>
                @foreach ($imparte as $data)
                    <tr>
                        <td>
                            {{$data->codclase}}
                        </td>
                        <td>
                            {{$data->id_aula}}
                        </td>
                        <td>
                            {{$data->id_profesor}}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

        <div class="card-footer">
            <a href="{{asset('/Home')}}" class="btn btn-primary" role="button">Inicio</a>
            <a href="javascript: history.go(-1)" class="btn btn-primary" role="button">Regresar</a>
        </div>

    @endif

@endsection