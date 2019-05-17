@extends('layout.layout')
@section('title', 'Agregar Edades')

@section('content')

    <h1 class="bg-primary text-white text-center">Modificar Edades</h1>

    <div class="row">

        <div class="col"><a class="btn-primary" href="{{url("edades")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("edades.update",$edad->id_edad)}}">
                @csrf
                @method("PUT")
                <div class="form-group">

                    <label for="descripcion"> Edad</label>
                    <input type="text" value="{{$edad->descripcion}}" id="descripcion" class="form-control" name="descripcion" placeholder="Edad">



                </div>


                <button type="submit" class="btn-primary"> Aceptar</button>

            </form>
        </div>

    </div>



@endsection