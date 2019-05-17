@extends ('layout.layout')
@section('title', 'Localidades')
@section('content')

    <h1 class="text-center">Localidades</h1>


    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("localidades/create")}}">Agregar localidades</a></div>
    </div>

    <div class=="row">

        <div class="col">
            <table class="table table-bordered">
                <thead>

                <th>Nombre Localidad</th>
                <th>Municipio</th>
                <th colspan="2">Acciones</th>


                </thead>
                <tbdoy>
                    @foreach($localidades as $localidad)
                        <tr>

                            <td>{{$localidad->descripcion}}</td>
                            <td>{{isset($localidad->getMunicipio[0])?$localidad->getMunicipio[0]->nombre_mun:""}}</td>

                            <td>
                                <a href="{{route("localidades.edit",$localidad->id_localidad)}}" class="btn btn-success" name="actualizar"><i class="far fa-edit"></i></a>

                            </td>

                            <td>


                                <form action="{{url("localidades")."/".$localidad->id_localidad}}" method="post">
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

