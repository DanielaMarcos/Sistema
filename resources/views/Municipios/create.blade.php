@extends('layout.layout')
@section('title', 'Agregar Municipios')

@section('content')

    <h1 class="text-center">Agregar municipios</h1>

    <div class="row">

        <div class="col"><a class="btn-outline-primary" href="{{url("municipios")}}">Regresar</a></div>
    </div>

    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url("municipios")}}">
                @csrf
                <div class="form-group">
                    <label for="nombre_mun"> Nombre Municipio</label>

                    <input type="text" class="form-control" name="nombre_mun" placeholder="Municipio">

                    <label for="exampleInputPassword2">Estado</label>


                    <select name="id_estado" id="">
                        @foreach($estados as $estado)

                            <option value="{{$estado->id_estado}}">{{$estado->descripcion}}</option>
                        @endforeach
                    </select>




                </div>
                <center><button type="submit" class="btn-primary"> Aceptar</button></center>

            </form>
        </div>

    </div>



@endsection