<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Turn Motors | Personalizacoes</title>

  <link rel="stylesheet" href="../assets/css/personalizacoes.min.css">
  <link rel="stylesheet" href="../assets/css/estilos-importantes.css">

  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="../assets/js/java.js" defer></script>
  <script src="../assets/js/js-bootstrap/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body id="container__body">

  <?php
  require_once('../assets/components/header.php');
  ?>

  <main>
        <div class="main__title">
            <h1>Personalizações</h1>
        </div>

        <!--REBAIXAMENTO-->
        <div class="linha__cards">
            <div class="card__subtitle">
                <h2>Rebaixamento</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <h3 class="card__title">Dropped</h3>
                </div>
                <div class="card">
                    <h3 class="card__title">Slammed</h3>
                </div>
                <div class="card">
                    <h3 class="card__title">HellaFlush</h3>
                </div>
            </div>
        </div>

        <!--PINTURA-->
        <div class="linha__cards">
            <div class="card__subtitle">
                <h2>Pintura</h2>
            </div>
            <div class="cards">
                <div class="card">
                    <h3 class="card__title">Sólida</h3>
                </div>
                <div class="card">
                    <h3 class="card__title">Metálica</h3>
                </div>
                <div class="card">
                    <h3 class="card__title">Perolizada</h3>
                </div>
            </div>
        </div>
    
  </main> 
  

  <?php
  require_once('../assets/components/footer.php');
  ?>

</body>

</html
