@extends('layout.layout')
@section('title', 'Agregar Estado civil')

@section('content')

    <h1 class="bg-primary text-white text-center">Modificar Estado Civil</h1>

    <div class="row">

        <div class="col"><a class="btn-primary" href="{{url("civiles")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("civiles.update",$civile->id_estadoc)}}">
                @csrf
                @method("PUT")
                <div class="form-group">

                    <label for="descripcion"> Nombre Estado civil</label>
                    <input type="text" value="{{$civile->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder="Estado civil">



                </div>


                <button type="submit" class="btn-primary"> Aceptar</button>

            </form>
        </div>

    </div>



@endsection
