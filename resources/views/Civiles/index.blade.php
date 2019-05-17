@extends ('layout.layout')
@section('title', 'Estado civil')
@section('content')

    <h1 class="text-center">Estado Civil</h1>


    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("civiles/create")}}">Agregar Estado Civil</a></div>
    </div>

    <div class=="row">

        <div clas="col">
            <table class="table table-bordered">
                <thead>

                <td>Estado Civil</td>
                <th colspan="2">Acciones</th>

                </thead>
                <tbdoy>
                    @foreach($civiles as $civil)
                        <tr>

                            <td>{{$civil->descripcion}}</td>

                            <td>
                                <a href="{{route("civiles.edit",$civil->id_estadoc)}}" class="btn btn-success" name="actualizar"><i class="far fa-edit"></i></a>
                            </td>

                            <td>


                                <form action="{{url("civiles")."/".$civil->id_estadoc}}" method="post">
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

