@extends ('layout.layout')
@section('title', 'Usuarios')
@section('content')

    <h1 class="text-center">Usuarios</h1>


    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("usuarios/create")}}">Agregar usuarios</a></div>
    </div>

    <div class=="row">

        <div class="col">
            <table class="table table-bordered">
                <thead>

                <th>Nombre Usuario</th>
                <th>Sexo</th>
                <th>Estado Civil</th>
                <th>Edad</th>
                <th>Localidad</th>
                <th colspan="2">Acciones</th>


                </thead>
                <tbdoy>
                    @foreach($usuarios as $usuario)
                        <tr>

                            <td>{{$usuario->nombre}}</td>
                            <td>{{isset($usuario->getSexo[0])?$usuario->getSexo[0]->descripcion:""}}</td>
                            <td>{{isset($usuario->getCivil[0])?$usuario->getCivil[0]->descripcion:""}}</td>
                            <td>{{isset($usuario->getEdad[0])?$usuario->getEdad[0]->descripcion:""}}</td>
                            <td>{{isset($usuario->getLocalidad[0])?$usuario->getLocalidad[0]->descripcion:""}}</td>


                            <td>
                                <a href="{{route("usuarios.edit",$usuario->id_usuario)}}" class="btn btn-success" name="actualizar"><i class="far fa-edit"></i></a>

                            </td>

                            <td>


                                <form action="{{url("usuarios")."/".$usuario->id_usuario}}" method="post">
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




