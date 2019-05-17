@extends('layout.layout')
@section('title', 'editar Usuario')

@section('content')

    <h1 class="text-center">Agregar Usuarios</h1>

    <div class="row">

        <div class="col"><a class="btn-outline-primaryy" href="{{url("usuarios")}}">Regresar</a></div>
    </div>

    <div class="row justify-content-center">
        <div class="col-8">
            <form method="post" action="{{route("usuarios.update",$usuario->id_usuario)}}">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="nombre"> Nombre Usuario</label>

                    <input type="text" value="{{$usuario->nombre}}" class="form-control" name="nombre" placeholder="Usuario">

                </div>


                <div class="form-group">

                    <label for="exampleInputPassword2"> Sexo</label>

                    <select name="id_sexo" id="">
                        <option value="">Selecciona una opcion</option>
                        @foreach($sexos as $sexo)

                            <option value="{{$sexo->id_sexo}}" {{$sexo->id_sexo==$usuario->id_sexo?"selected":""}} >{{$sexo->descripcion}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <select name="id_estadoc" id="">
                        <option value="">Selecciona una opcion</option>
                        @foreach($civiles as $civil)

                            <option value="{{$civil->id_estadoc}}" {{$civil->id_estadoc==$usuario->id_estadoc?"selected":""}} >{{$civil->descripcion}}</option>
                        @endforeach
                    </select>

                </div>

                <div>
                    <select name="id_edad" id="">
                        <option value="">Selecciona una opcion</option>
                        @foreach($edades as $edad)

                            <option value="{{$edad->id_edad}}" {{$edad->id_edad==$usuario->id_edad?"selected":""}} >{{$edad->descripcion}}</option>
                        @endforeach
                    </select>

                </div>

                <div>
                    <option value="">Selecciona una opcion</option>
                    <select name="id_localidad" id="">
                        @foreach($localidades as $localidad)

                            <option value="{{$localidad->id_localidad}}" {{$localidad->id_localidad==$usuario->id_localidad?"selected":""}} >{{$localidad->descripcion}}</option>
                        @endforeach
                    </select>

                </div>



                <center><button type="submit" class="btn-primary"> Aceptar</button></center>

            </form>


        </div>



        @endsection
