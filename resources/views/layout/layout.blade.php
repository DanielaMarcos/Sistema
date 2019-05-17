<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>@yield("title")</title>
</head>
<body>
<header class="p-1 mb-1 bg-success text-white">

    <div class="col-xs-2 col-sm-2 col-md-1">

        <img src="hm.jpg" alt="..." class="img-thumbnail">


    </div>
    <ul class="nav justify-content-center">


        <li class="nav-item"><a href="#!" class="nav-link text-white font-weight-bold">PROTEGE TÚ VIDA</a></li>
        <li class="nav-item"><a href="{{url("estados")}}" class="nav-link text-white">Estados</a></li>
        <li class="nav-item"><a href="{{url("municipios")}}" class="nav-link text-white">Municipios</a></li>
        <li class="nav-item"><a href="{{url("localidades")}}" class="nav-link text-white">Localidades</a></li>
        <li class="nav-item"><a href="{{url("edades")}}" class="nav-link text-white">Edades</a></li>
        <li class="nav-item"><a href="{{url("sexos")}}" class="nav-link text-white">Sexos</a></li>
        <li class="nav-item"><a href="{{url("civiles")}}" class="nav-link text-white">Estado Civil</a></li>
        <li class="nav-item"><a href="{{url("usuarios")}}" class="nav-link text-white">Usuarios</a></li>
        <li class="nav-item"><a href="#!" class="nav-link text-white">Encuesta</a></li>
        <li class="nav-item"><a href="" class="nav-link text-white">Resultados</a></li>
        <li class="nav-item"><a href="" class="nav-link text-white">Medidas de prevención</a></li>

    </ul>



</header>

<section class="=container">

    @yield("content")
</section>



</body>
</html>