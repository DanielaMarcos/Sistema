@extends('layout.layout')
@section('title', 'Agregar Localidades')

@section('content')

    <h1 class="text-center">Agregar localidades</h1>

    <div class="row">

        <div class="col"><a class="btn-outline-primaryy" href="{{url("localidades")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("localidades")}}">
                @csrf
                <div class="form-group">
                    <label for="descripcion"> Nombre Localidad</label>

                    <input type="text" class="form-control" name="descripcion" placeholder="Localidad">

                    <label for="exampleInputPassword2">Municipio</label>


                    <select name="id_municipio" id="">
                        @foreach($municipios as $municipio)

                            <option value="{{$municipio->id_municipio}}">{{$municipio->nombre_mun}}</option>
                        @endforeach
                    </select>



                </div>
                <center><button type="submit" class="btn-primary"> Aceptar</button></center>

            </form>
        </div>

    </div>



@endsection

