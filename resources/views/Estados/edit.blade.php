@extends('layout.layout')
@section('title', 'Agregar Estados')

@section('content')

    <h1 class="bg-primary text-white text-center">Modificar Estados</h1>

    <div class="row">

        <div class="col"><a class="btn-primary" href="{{url("estados")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("estados.update",$estado->id_estado)}}">
                @csrf
                @method("PUT")
                <div class="form-group">

                    <label for="descripcion"> Nombre Estado</label>
                    <input type="text" value="{{$estado->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder="Estado">



                </div>


                <button type="submit" class="btn-primary"> Aceptar</button>

            </form>
        </div>

    </div>



@endsection
