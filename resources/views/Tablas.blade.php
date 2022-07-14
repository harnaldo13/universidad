@extends('/plantilla')

@section('style')
   <style>
    .viewer a{
        color:blue;
        border-right:3px solid #000;
        padding-right:10px;
    }
   </style>
    <center>
    @if ($num == 1)
                    <h1>Clases</h1>

                <table class="viewer" border="4" style="border-collapse: collapse; padding:40px;width:90%;text-align:center;">
                
                    <thead>
                        <th scope="col">Codigo de la Clase</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Credito</th>
                        <th scope="col">Accion</th>
                    </thead>
                
                    <tbody>
                        @foreach ($clase as $data)
                            <tr>
                                <td>
                                    {{$data->codclase}}
                                </td>
                                <td>
                                    {{$data->nombre}}
                                </td>
                                <td>
                                    {{$data->credito}}
                                </td>
                                <td>
                                          <a href="{{Route('clases.show',['clase' => $data->codclase])}}">Mostrar</a>
                                          <a href="{{Route('clases.edit',['clase' => $data->codclase])}}" >Editar</a>
                                          <a href="{{Route('Tablas.Relacion_Clase',['clase' => $data->codclase])}}" >Relaciones</a>
                                          <a href="{{Route('clases.destroy',['clase' => $data->codclase])}}" >Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                
                </table>

            </div>
            
            <div class="card-footer">
                <a href="{{asset('/Home')}}" class="btn btn-danger" role="button">Inicio</a>
                
            </div>
    @endif

    @if ($num == 2)


    
                    <h1>Aulas</h1>
                <table class="viewer" border="4" style="border-collapse: collapse; padding:40px;width:90%;text-align:center;">
                
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ubicaion</th>
                        <th scope="col">Accion</th>
                    </thead>
        
                    <tbody>
                        @foreach ($aula as $data)
                            <tr>
                                <td>
                                    {{$data->id}}
                                </td>
                                <td>
                                    {{$data->nombre}}
                                </td>
                                <td>
                                    {{$data->ubicacion}}
                                </td>
                                <td>
                                          <a href="{{Route('aulas.show',['aula' => $data->id])}}" >Mostrar</a>
                                          <a href="{{Route('aulas.edit',['aula' => $data->id])}}" >Editar</a>
                                          <a href="{{Route('Tablas.Relacion_Aula',['aula' => $data->id])}}">Relaciones</a>
                                          <a href="{{Route('aulas.destroy',['aula' => $data->id])}}">Eliminar</a>
        
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
        
                </table>
                 <a href="{{asset('/Home')}}" class="btn btn-primary" role="button">Inicio</a>

        </div>

    @endif

    @if ($num == 3)
                    <h1>Profesores</h1>
                <table class="viewer" border="4" style="border-collapse: collapse; padding:40px;width:90%;text-align:center;">
                
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Título</th>
                        <th scope="col">Accion</th>
                    </thead>
        
                    <tbody>
                        @foreach ($profesor as $data)
                            <tr>
                                <td>
                                    {{$data->id}}
                                </td>
                                <td>
                                    {{$data->nombre}}
                                </td>
                                <td>
                                    {{$data->apellido}}
                                </td>
                                <td>
                                    {{$data->titulo}}
                                </td>
                                <td>
                                          <a href="{{Route('profesors.show',['profesor' => $data->id])}}">Mostrar</a>
                                          <a href="{{Route('profesors.edit',['profesor' => $data->id])}}">Editar</a>
                                          <a href="{{Route('Tablas.Relacion_Profesor',['profesor' => $data->id])}}">Relaciones</a>
                                          <a href="{{Route('profesors.destroy',['profesor' => $data->id])}}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
        
                </table>
                <br>
                <a href="{{asset('/Home')}}" class="btn btn-danger" role="button">Inicio</a>
           

        </div>

    @endif

    @if ($num == 4)  

        
                <h3>Tabla Impartes</h3>
                <table class="viewer" border="4" style="border-collapse: collapse; padding:40px;width:90%;text-align:center;">
                
                    <thead>
                        <th scope="col">Codigo de la clase</th>
                        <th scope="col">ID del aula</th>
                        <th scope="col">ID del profesor</th>
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

    <a href="{{asset('/Home')}}" class="btn btn-primary" role="button">Inicio</a>
    


    @endif
    </center>

@endsection