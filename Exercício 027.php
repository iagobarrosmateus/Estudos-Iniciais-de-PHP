<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<p, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Exercício 026.php';
    require_once 'Exercício 028.php';
    $n = new Lutador("Pretty Boy","França",30,1.75,68.9,11,2,1);
    $m = new Lutador("Bad Boy","França",25,1.90,78,19,5,0);
    $n->Status();
    $m->Status();
    $n->ganharLuta();
    $n->Status();

    $UEC01 = new luta();
    $UEC01->marcarLuta($n,$m);
    $UEC01->lutar();
    ?>
</body>
</html>