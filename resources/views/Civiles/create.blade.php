@extends('layout.layout')
@section('title', 'Agregar Estado Civil')

@section('content')

    <h1 class="text-center">Agregar estado civil</h1>

    <div class="row">

        <div class="col">
            <a href="{{url('civiles')}}">Regresar</a>

        </div>
    </div>


    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url('civiles')}}">
                @csrf
                <div class="form-group">
                    <label for="descripcion"> Nombre Estado Civil</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Estado civil">
                </div>
                <center><button type="submit" class="btn-primary"> Aceptar</button></center>

            </form>
        </div>

    </div>



@endsection

