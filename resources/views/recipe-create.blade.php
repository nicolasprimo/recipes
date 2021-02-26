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
    <h1>Nouvelle Recette</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="/recettes" method="post">
      @csrf
      <label for="">Nom de la recette:</label>
      <input type="text" name="nomDeLaRecette" id="" value="{{old('nb_perso')}}" placeholder="icilenom">
      <label for="">Nombre de personnes:</label>
      <input type="number" name="nb_perso" id="" value="{{old('nb_perso')}}">
      <button type="submit">Créer</button>
    </form>
  </div>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>