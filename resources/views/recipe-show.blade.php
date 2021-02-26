<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Recettes</title>
</head>
<body>
  @include('nav')
  <div class="container">    
    <h1>Ma recette : {{$data->name}}</h1>
    <h4>Nombre de personne : {{$data->nbr_personnes}} </h4>
    <a href="/recettes/{{$data->id}}/edit" class="btn btn-warning">Edit</a>
  </div>

</body>
<script src="{{asset('js/app.js')}}"></script>
</html>