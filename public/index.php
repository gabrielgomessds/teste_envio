<?php
include './../app/configuracao.php';
include '../app/Libraries/Rota.php';
include '../app/Libraries/Cotroller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL?>/public/css/estilos.css">
</head>
<body>

<?php
include '../app/Views/topo.php';
$rotas = new Rota();
include '../app/Views/rodape.php';
?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script src="<?=URL?>/public/js/main.js"></script>
</body>
</html>