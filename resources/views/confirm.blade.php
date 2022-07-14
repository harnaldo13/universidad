@extends('/plantilla')

@section('style')

    @if ($num==1)
        
        <div>
            <center>

                @if ($numin==1)

                    <h3>Dato guardado Satisfactoriamente</h3><br><br>
                    <a href="/clases" class="btn btn-primary" role="button">Regresar</a>

                @endif

                @if ($numin==2)

                    <h3>Dato guardado Satisfactoriamente</h3><br><br>
                    <a href="/aulas" class="btn btn-primary" role="button">Regresar</a>

                @endif

                @if ($numin==3)

                    <i>Dato guardado Satisfactoriamente</h3><br><br>
                    <a href="/profesors" class="btn btn-primary" role="button">Regresar</a>

                @endif

                @if ($numin==4)

                    <h3>Dato guardado Satisfactoriamente</h3><br><br>
                    <a href="/impartes" class="btn btn-primary" role="button">Regresar</a>

                @endif

            </center>

        </div>

    @endif

    @if ($num==2)
        
        <div>
            <center>

                @if ($numin==1)

                    <h3>Dato Actualizado Satisfactoriamente</h3><br><br>
                    <a href="/clases" class="btn btn-primary" role="button">Regresar</a>

                @endif

                @if ($numin==2)

                    <h3>Dato Actualizado Satisfactoriamente</h3><br><br>
                    <a href="/aulas" class="btn btn-primary" role="button">Regresar</a>

                @endif

                @if ($numin==3)

                    <h3>Dato Actualizado Satisfactoriamente</h3><br><br>
                    <a href="/profesors" class="btn btn-primary" role="button">Regresar</a>

                @endif

            </center>

        </div>

    @endif

    @if ($num==3)

    @endif

@endsection