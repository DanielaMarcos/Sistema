@extends('layout.layout')
@section('title', 'Agregar Edad')

@section('content')

    <h1 class="text-center">Agregar edad</h1>

    <div class="row">

        <div class="col">
            <a href="{{url('edades')}}">Regresar</a>

        </div>
    </div>


    <div class="row">
        <div class="col-4 offset-4">
            <form method="post" action="{{url('edades')}}">
                @csrf
                <div class="form-group">
                    <label for="descripcion"> Edad</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Edad">
                </div>
                <center><button type="submit" class="btn-primary"> Aceptar</button></center>

            </form>
        </div>

    </div>



@endsection

