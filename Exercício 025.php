<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <h1>Controle Remoto</h1>
    <pre>
    <?php
    require_once 'Exercício 024.php';
    $c = new ControleRemoto();
    $c->ligar();
    $c->menosVolume();
    $c->abrirMenu();
    
    ?>
    </pre>
</body>
</html>