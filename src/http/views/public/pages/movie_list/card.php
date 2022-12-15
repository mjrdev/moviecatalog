<div class="card text-bg-dark" style="width: 18rem;">
  <div class="img-card"
  style="
  width: 17.9rem;
  height: 250px;
  background-image: url('<?= $movie[3] ?>');
  background-size: cover
  "
  ></div>
  <div class="card-body ">
    <h5 class="card-title fs-6 fw-bold"><?= $movie[1] ?></h5>
    <p class="card-text text-truncate fs-7"><?= $movie[2] ?></p>
    <a href="/filme/<?= $movie[0] ?>" class="btn btn-dark btn-primary-template justify-content-center d-flex align-items-center">
      saiba mais <span class="material-symbols-outlined align-center " style="font-size: 15pt">add</span>
    </a>
  </div>
</div>