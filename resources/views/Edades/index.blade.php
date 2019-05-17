@extends ('layout.layout')
@section('title', 'Edades')
@section('content')

    <h1 class="text-center">Edad</h1>


    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("edades/create")}}">Agregar edades</a></div>
    </div>

    <div class=="row">

        <div clas="col">
            <table class="table table-bordered">
                <thead>

                <td>Edad</td>
                <th colspan="2">Acciones</th>

                </thead>
                <tbdoy>
                    @foreach($edades as $edad)
                        <tr>

                            <td>{{$edad->descripcion}}</td>

                            <td>
                                <a href="{{route("edades.edit",$edad->id_edad)}}" class="btn btn-success" name="actualizar"><i class="far fa-edit"></i></a>
                            </td>

                            <td>


                                <form action="{{url("edades")."/".$edad->id_edad}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button href="" class="btn btn-danger" name="eliminar"><i class="fas fa-minus-circle"></i></button>


                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>


@endsection

