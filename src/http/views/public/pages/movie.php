<div class=" mt-4">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/" class="text-dark">Cátalogo</a></li>
      <li class="breadcrumb-item active" aria-current="page"><a href="/filmes" class="text-dark">Filmes</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $props->title ?></li>
    </ol>
  </nav>

  <div class="d-flex justify-content-center justify-content-sm-center justify-content-lg-around flex-wrap gap-3">

  <div class="container">
    <div class="row my-4 flex-wrap justify-content-center">
      <div class="col-lg-6 col-md-11">
        <h1 class="fw-bold"><?= $props->title ?></h1>
        <p><?= $props->description ?></p>
        <div class="d-flex gap-2 col-12 mx-auto">
          <p><strong>Ano de lançamento: </strong><?= $props->year ?></p><br/>
          <p><strong>País de origem: </strong><?= $props->country ?></p>
        </div>
      </div>

      <div class="col-lg-6 col-md-11">
        <img class="img-fluid img-main" src="<?= $props->url_image ?>" alt="">
      </div>

      <style>
        .img-main {
          width: 800px;
          height: 400px;
          object-position: 20% 10%;
          object-fit: cover;
        }
      </style>
    </div>
  </div>
</div>