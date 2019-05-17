@extends('layout.layout')
@section('title', 'Agregar Sexos')

@section('content')

    <h1 class="bg-primary text-white text-center">Modificar Sexos</h1>

    <div class="row">

        <div class="col"><a class="btn-primary" href="{{url("sexos")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("sexos.update",$sexo->id_sexo)}}">
                @csrf
                @method("PUT")
                <div class="form-group">

                    <label for="descripcion"> Nombre Sexo</label>
                    <input type="text" value="{{$sexo->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder="Sexo">



                </div>


                <button type="submit" class="btn-primary"> Aceptar</button>

            </form>
        </div>

    </div>



@endsection