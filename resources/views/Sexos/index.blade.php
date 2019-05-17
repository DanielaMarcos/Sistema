@extends ('layout.layout')
@section('title', 'Sexos')
@section('content')

    <h1 class="text-center">Sexos</h1>


    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("sexos/create")}}">Agregar sexos</a></div>
    </div>

    <div class=="row">

        <div clas="col">
            <table class="table table-bordered">
                <thead>

                <td>Sexo</td>
                <th colspan="2">Acciones</th>

                </thead>
                <tbdoy>
                    @foreach($sexos as $sexo)
                        <tr>

                            <td>{{$sexo->descripcion}}</td>

                            <td>
                                <a href="{{route("sexos.edit",$sexo->id_sexo)}}" class="btn btn-success" name="actualizar"><i class="far fa-edit"></i></a>
                            </td>

                            <td>


                                <form action="{{url("sexos")."/".$sexo->id_sexo}}" method="post">
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
