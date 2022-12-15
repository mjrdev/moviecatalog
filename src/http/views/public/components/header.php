<?php ?>

<div class="bg-primary">
  <nav class="navbar navbar-dark navbar-expand-lg bg-primary max-width-app">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="/">
      <span class="material-symbols-outlined">movie</span>
        Catálogo
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll" style="font-size: 11pt;">
        <ul class="navbar-nav me-auto my-2 my-lg-0">
          <li class="nav-item mx-2">
            <a class="nav-link d-flex align-items-center <?= $name == 'pages/home' ? 'active border-bottom' : '' ?>" aria-current="page" href="/">
            <span span class="material-symbols-outlined me-1">home</span>
              Página Inicial
            </a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link d-flex align-items-center <?= $name == 'pages/moviesList' ? 'active border-bottom' : '' ?>" aria-current="page" href="/filmes">
            <span span class="material-symbols-outlined me-1">movie_filter</span>
              Filmes
            </a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link d-flex align-items-center <?= $name == 'pages/add' ? 'active border-bottom' : '' ?>" aria-current="page" href="/adicionar">
            <span span class="material-symbols-outlined me-1">add_box</span>
              Adicionar
            </a>
          </li>
        </ul>
        <form class="d-flex" role="search" action="/filmes" method="get">
          <label class="d-flex align-items-center" for="search">
            <span class="material-symbols-outlined text-white mx-2" style="font-size: 23pt;">search</span>
          </label>
          <input id="search" name="search" class="outline-light search form-control me-2" type="text" placeholder="Buscar por filmes aqui" aria-label="Search">
          <button class="btn-search btn btn-outline-light" type="submit">Pesquisar</button>
        </form>
      </div>
    </div>
  </nav>
</div>

<style>
.btn-search {
  border-radius: 0;
}

.search {
  border-radius: 0;
}

.search::placeholder {
  opacity: 30%;
}
</style>