<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{Route::current()->uri == 'recettes' ? 'active' :''}}">
        <a class="nav-link" href="/recettes">Recettes</a>
      </li>
      <li class="nav-item {{Route::current()->uri == 'recettes/create' ? 'active' :''}}">
        <a class="nav-link" href="/recettes/create">Nouvelle Recette</a>
      </li>     
    </ul>
    
  </div>
</nav>