@extends('/plantilla')

@section('style')

   @if ($num==0)
     
         <center>

            <i><b><h3>No se encontraron datos relacionados</h3></b></i><br><br>
            <a href="javascript: history.go(-1)" class="btn btn-danger" role="button">Regresar</a>

         </center>
   @endif

   @if ($num==1)
       
      <table >

         <thead>

            <th scope="col">Clases</th>
            <th scope="col">Aulas</th>
            <th scope="col">Profesores</th>

         </thead>

         <tbody>

            <tr>

               <td>

                  {{$Todo[0]->clases->nombre}}

               </td>

               <td>

                  @for ($i = 0; $i < $cantidad; $i++)
                     
                  {{"[" . $Todo[$i]->aulas->nombre . "]"}}

                  @endfor

               </td>

               <td>

                  @for ($i = 0; $i < $cantidad; $i++)
                     
                  {{"[" . $Todo[$i]->profesors->nombre . "]"}}

                  @endfor

               </td>

            </tr>

         </tbody>

      </table>
         <a href="javascript: history.go(-1)" class="btn btn-danger" role="button">Regresar</a>

   @endif

   @if ($num==2)

      <table>

         <thead>

            <th scope="col">Aulas</th>
            <th scope="col">Clases</th>
            <th scope="col">Profesores</th>

         </thead>

         <tbody>

            <tr>

               <td>

                  {{$Todo[0]->aulas->nombre}}

               </td>

               <td>

                  @for ($i = 0; $i < $cantidad; $i++)
                     
                  {{"[" . $Todo[$i]->clases->nombre . "]"}}

                  @endfor

               </td>

               <td>

                  @for ($i = 0; $i < $cantidad; $i++)
                     
                  {{"[" . $Todo[$i]->profesors->nombre . "]"}}

                  @endfor

               </td>

            </tr>

         </tbody>

      </table>
      <a href="javascript: history.go(-1)" class="btn btn-danger" role="button">Regresar</a>
   @endif

   @if ($num==3)
       
      <table>

         <thead>

            <th scope="col">Profesor</th>
            <th scope="col">Clases</th>
            <th scope="col">Aulas</th>

         </thead>

         <tbody>

            <tr>

               <td>

                  {{$Todo[0]->profesors->nombre . " " . $Todo[0]->profesors->apellido}}

               </td>

               <td>

                  @for ($i = 0; $i < $cantidad; $i++)
                     
                  {{"[" . $Todo[$i]->clases->nombre . "]"}}

                  @endfor

               </td>

               <td>

                  @for ($i = 0; $i < $cantidad; $i++)
                     
                  {{"[" . $Todo[$i]->aulas->nombre . "]"}}

                  @endfor

               </td>

            </tr>

         </tbody>

      </table>
            <a href="javascript: history.go(-1)" class="btn btn-primary" role="button">Regresar</a>

      @endif

@endsection