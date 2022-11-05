<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Exercício 029.php';
    require_once 'Exercício 030.php';
    
    $p[0] = new Pessoa ("Pedro", 22, "M"); 
    $p[1] = new Pessoa ("Maria", 31, "F");
    
    $l[0]= new Livro ("PHP", "José da silva", 300, $p[0]);
    $l[1]= new Livro ("Java", "Maria da silva", 500, $p[0]);
    $l[2]= new Livro ("HTML", "Pedro alvares", 600, $p[1]);
    
    $l[0]->abrir();
    $l[0]->folhear(80);
    $l[0]->avancarPag();
    $l[0]->detalhes();

    $l[1]->detalhes();
    $l[2]->detalhes();
    ?>
    </pre>    
</body>
</html>