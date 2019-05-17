@extends('layout.layout')
@section('title', 'Agregar Sexo')

@section('content')

    <h1 class="text-center">Agregar sexos</h1>

    <div class="row">

        <div class="col">
            <a href="{{url('sexos')}}">Regresar</a>

        </div>
    </div>


    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url('sexos')}}">
                @csrf
                <div class="form-group">
                    <label for="descripcion"> Nombre Sexo</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Sexo">
                </div>
                <center><button type="submit" class="btn-primary"> Aceptar</button></center>

            </form>
        </div>

    </div>



@endsection

