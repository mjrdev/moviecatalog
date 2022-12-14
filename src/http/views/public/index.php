<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <!-- fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

  <!-- icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <style> .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48; margin: 0 } </style>

  <link type="image/png" sizes="96x96" rel="icon" href="https://img.icons8.com/external-anggara-filled-outline-anggara-putra/64/null/external-movie-media-anggara-filled-outline-anggara-putra.png">

  <style lang="css">
    body {
      font-family: 'Inter', sans-serif
    }
    .bg-primary { background-color: #cf1313 !important; }
    .bg-primary-dark { background-color: #5e1f14 !important; }
    .bg-primary-secondary { background-color: #1f66d1 !important; }
    .bg-primary-secondary { background-color: #123469 !important; }
    .btn-primary-template { background-color: #cf1313 !important; }
    
    .max-width-app {
      max-width: 1200px;
      margin: auto;
    }
  </style>
  <title>Catálogo de Filmes</title>
</head>
<body>
  <?php require 'components/modal.php'; ?>
  <?php require 'components/header.php'; ?>
  <main id="main" class="max-width-app" style="min-height: 90vh;">
  <?php require $name.'.php'; ?>
  </main>
  <?php require 'components/footer.php';?>
</body>
</html>