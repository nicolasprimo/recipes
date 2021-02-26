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
    <h1>Voici nos recettes :</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nom</th>
          <th scope="col">Nombre de personnes</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($datas as $data)            
        <tr>
          <th scope="row">{{$data->id}}</th>
          <td><a href="/recettes/show/{{$data->id}}">{{$data->name}}</a></td>
          <td>{{$data->nbr_personnes}}</td>       
          <td>
            <form action="/recettes/delete/{{$data->id}}" method="post">
              @csrf
              <button type="submit">Delete</button>
            </form>
          </td>   
        </tr>   
        @endforeach
      </tbody>
    </table>
    <a class="btn btn-success" href="/recettes/create">Créer une recette</a>    
  </div>

</body>
<script src="{{asset('js/app.js')}}"></script>
</html>