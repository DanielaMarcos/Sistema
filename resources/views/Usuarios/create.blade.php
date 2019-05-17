@extends('layout.layout')
@section('title', 'Agregar Usuarios')

@section('content')

    <h1 class="text-center">Agregar Usuarios</h1>

    <div class="row">

        <div class="col"><a class="btn-outline-primaryy" href="{{url("usuarios")}}">Regresar</a></div>
    </div>

    <div class="row justify-content-center">
        <div class="col-4">
            <form method="post" action="{{url("usuarios")}}">
                @csrf

                <div class="form-group">
                    <label for="nombre"> Nombre Usuario</label>

                    <input type="text" class="form-control" name="nombre" placeholder="Usuario">

                    </div>


                    <div class="form-group">

                        <label for="exampleInputPassword2"> Sexo</label>

                        <select name="id_sexo" id="">
                            @foreach($sexos as $sexo)

                                <option value="{{$sexo->id_sexo}}">{{$sexo->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="exampleInputPassword3"> Estado Civil</label>
                        <select name="id_estadoc" id="">
                            @foreach($civiles as $civil)

                                <option value="{{$civil->id_estadoc}}">{{$civil->descripcion}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div>
                        <label for="exampleInputPassword4"> Edad</label>
                        <select name="id_edad" id="">
                            @foreach($edades as $edad)

                                <option value="{{$edad->id_edad}}">{{$edad->descripcion}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div>
                        <label for="exampleInputPassword5"> Localidad</label>
                        <select name="id_localidad" id="">
                            @foreach($localidades as $localidad)

                                <option value="{{$localidad->id_localidad}}">{{$localidad->descripcion}}</option>
                            @endforeach
                        </select>

                    </div>



                <center><button type="submit" class="btn-primary"> Aceptar</button></center>

            </form>


    </div>



@endsection


