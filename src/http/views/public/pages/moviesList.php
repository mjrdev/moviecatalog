<div class=" mt-4">
  <h2 class="fw-semibold ms-3 mb-4">Filmes</h2>

  <div class="d-flex justify-content-center justify-content-sm-center justify-content-lg-around flex-wrap gap-3">
    <?php
      foreach($props as $movie) { 
        require __DIR__.'/movie_list/card.php';
      }
    ?>
  </div>

</div>