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
    <?php
    
    $i=$_GET["inicio"];
    $f=$_GET["fim"];
    $c=$_GET["inc"];


    while($i < $f){
        $i += $c;
        echo $i."</br>";
    }

    ?>
</body>
</html>