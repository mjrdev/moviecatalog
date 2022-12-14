<div class=" mt-4">
  <h2 class="fw-semibold ms-3 mb-4">Filmes em Destaques</h2>

  <div class="d-flex justify-content-center justify-content-sm-center justify-content-lg-around flex-wrap gap-3">

  <?php
    foreach($props as $movie) { 
      require __DIR__.'/movie_list/card.php';
    }
  ?>

  <div class="container">
    <div class="row my-4 flex-wrap">
      <div class="col-lg-6 col-md-11">
        <h1 class="fw-bold">Aqui você encontra tudo sobre o filme que deseja assistir.</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt a quas ipsam hic laboriosam nesciunt! Eligendi assumenda doloremque unde modi pariatur nemo commodi alias id tempore qui? Perferendis, temporibus pariatur.</p>
        <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-danger text-white btn-primary-template justify-content-center d-flex align-items-center">
          saiba mais <span class="material-symbols-outlined align-center " style="font-size: 15pt">add</span>
        </a>
            
        </div>
      </div>

      <div class="col-lg-6 col-md-11">
        <img class="img-fluid" src="https://s2.glbimg.com/zEl2eQ0SKVQVNHRExYjyc7qJ_zY=/0x0:1200x800/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2022/L/B/YYxjCVSIukjMmfqDOX0A/colagem-filmes-acao-techtudo.jpg" alt="">
      </div>
    </div>
  </div>
</div>