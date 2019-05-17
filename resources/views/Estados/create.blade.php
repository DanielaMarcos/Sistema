@extends('layout.layout')
@section('title', 'Agregar Estados')

@section('content')

    <h1 class="text-center">Agregar estados</h1>

    <div class="row">

        <div class="col">
            <a href="{{url('estados')}}">Regresar</a>

        </div>
    </div>


    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url('estados')}}">
                @csrf
                <div class="form-group">
                    <label for="descripcion"> Nombre Estado</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Estado">
                </div>
                <center><button type="submit" class="btn-primary"> Aceptar</button></center>

            </form>
        </div>

    </div>



@endsection

