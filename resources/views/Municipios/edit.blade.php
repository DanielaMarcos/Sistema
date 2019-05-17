@extends('layout.layout')
@section('title', 'Añadir Municipios')

@section('content')

    <h1 class="bg-primary text-white text-center">Modificar Municipios</h1>

    <div class="row">

        <div class="col"><a class="btn-primary" href="{{url("municipios")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{route("municipios.update",$municipio->id_municipio)}}">
                @csrf
                @method("PUT")
                <div class="form-group">

                    <label for="nombre_mun"> Nombre Municipio</label>
                    <input type="text" class="form-control" name="nombre_mun" value="{{$municipio->nombre_mun}}"  placeholder="Nombre">


                    <label for="exampleInputPassword2"> Estado</label>

                    <select name="id_estado" id="">
                        <option value="">Selecciona una opcion</option>
                        @foreach($estados as $estado)
                            <option value="{{$estado->id_estado}}" {{$estado->id_estado==$municipio->id_estado?"selected":""}} >{{$estado->descripcion}}</option>
                        @endforeach
                    </select>


                </div>


                <button type="submit" class="btn-primary"> Aceptar</button>

            </form>
        </div>

    </div>



@endsection