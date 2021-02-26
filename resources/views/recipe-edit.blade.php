<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @include('nav')
  <div class="container">
    <h1>Edit Recette</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="/recettes/{{$data->id}}" method="post">
      @csrf
      <label for="">Nom de la recette:</label>
      <input type="text" name="nomDeLaRecette" id="" value="{{old('nomDeLaRecette') ? old('nomDeLaRecette') : $data->name}}" placeholder="">
      <label for="">Nombre de personnes:</label>
      <input type="number" name="nb_perso" id="" value="{{$data->nbr_personnes}}">
      <button type="submit">Update</button>
    </form>
  </div>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>