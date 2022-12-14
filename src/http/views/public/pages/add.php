<div class="mt-4">
  <div class="container my-4">
    <form method="post" action="#">
      <div class="mb-3">
        <label for="name" class="form-label">Nome do filme</label>
        <input value="" name="title" type="text" class="form-control" id="movie-name" placeholder="A arca de nóe" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrição da obra</label>
        <textarea value="" name="description" class="form-control" id="description" rows="3" placeholder="Sinopse do filme aqui..." required style="resize: none; height: 140px"></textarea>
      </div>
      <div class="mb-3">
        <label for="url-image" class="form-label">URL da Imagem</label>
        <input value="" name="url_image" type="text" class="form-control" id="url-image" placeholder="http://image-url.jpg" required>
      </div>
      <div class="mb-3 row">
        <div class="col-6">
          <label for="url-image" class="form-label">Ano de lançamento</label>
          <input value="" name="url_image" type="number" class="form-control" id="url-image" placeholder="2023" required>
        </div>
        <div class="col-6">
          <label for="url-image" class="form-label">País de Origem</label>
          <input value="" name="url_image" type="text" class="form-control" id="url-image" placeholder="México" required>
        </div>
      </div>
      <div class="d-grid gap-2 col-3 mx-auto">
        <button class="btn btn-primary-template text-white" type="submit">Salvar</button>
      </div>
    </form>
  </div>
  <!-- <h2 class="fw-semibold ms-3 mb-4">Veja alguns exemplos</h2>
  <div class="d-flex justify-content-center justify-content-sm-center justify-content-lg-around flex-wrap gap-3">

    <?php
      for ($i=0; $i < 4; $i++) { 
        require __DIR__.'/../components/card.php';
      }
    ?>
  </div> -->
</div>