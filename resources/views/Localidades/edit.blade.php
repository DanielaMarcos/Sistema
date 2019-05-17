@extends('layout.layout')
@section('title', 'Agregar Localidades')

@section('content')

    <h1 class="bg-primary text-white text-center">Modificar Localidades</h1>

    <div class="row">

        <div class="col"><a class="btn-primary" href="{{url("localidades")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("localidades.update",$localidad->id_localidad)}}">
                @csrf
                @method("PUT")
                <div class="form-group">

                    <label for="descripcion"> Nombre Localidad</label>
                    <input type="text" class="form-control" name="descripcion" value="{{$localidad->descripcion}}"  placeholder="Nombre">

                    <label for="exampleInputPassword2"> Municipio</label>

                    <select name="id_municipio" id="">
                        <option value="">Selecciona una opcion</option>
                        @foreach($municipios as $municipio)
                            <option value="{{$municipio->id_municipio}}" {{$municipio->id_municipio==$localidad->id_municipio?"selected":""}} >{{$municipio->nombre_mun}}</option>
                        @endforeach
                    </select>


                </div>


                <button type="submit" class="btn-primary"> Aceptar</button>

            </form>
        </div>

    </div>



@endsection
