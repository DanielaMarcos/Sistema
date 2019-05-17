@extends ('layout.layout')
@section('title', 'Estados')
@section('content')

    <h1 class="text-center">Estados</h1>


    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("estados/create")}}">Agregar Estados</a></div>
    </div>

    <div class=="row">

        <div clas="col">
            <table class="table table-bordered">
                <thead>

                <td>Estado</td>
                <th colspan="2">Acciones</th>

                </thead>
                <tbdoy>
                    @foreach($estados as $estado)
                        <tr>

                            <td>{{$estado->descripcion}}</td>

                            <td>
                                <a href="{{route("estados.edit",$estado->id_estado)}}" class="btn btn-success" name="actualizar"><i class="far fa-edit"></i></a>
                            </td>

                            <td>


                                <form action="{{url("estados")."/".$estado->id_estado}}" method="post">
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
