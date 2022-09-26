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
    $c=1;
    while($c<=10){
        echo $c."</br>";
        $c++;
    }

    $n=$_GET["v1"];
    while($n <= 100){
        echo "<br>".$n."</br>";
        $n += 10;
    }
    ?>
</body>
</html>