@extends ('layout.layout')
@section('title', 'Municipios')
@section('content')

    <h1 class=" text-center">Municipios</h1>



    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("municipios/create")}}">Agregar municipios</a></div>
    </div>

    <div class=="row">

        <div clas="col">
            <table class="table table-bordered">

                <thead>
                <th>Nombre Municipio</th>
                <th>Estado</th>
                <th colspan="2">Acciones</th>


                </thead>
                <tbdoy>
                    @foreach($municipios as $municipio)
                        <tr>

                            <td>{{$municipio->nombre_mun}}</td>
                            <td>{{isset($municipio->getEstado[0])?$municipio->getEstado[0]->descripcion:""}}</td>

                            <td>
                                <a href="{{route("municipios.edit",$municipio->id_municipio)}}" class="btn btn-success" name="actualizar"><i class="far fa-edit"></i></a>

                            </td>

                            <td>


                                <form action="{{url("municipios")."/".$municipio->id_municipio}}" method="post">
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