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
    $n = $_GET["num"];
    $o = $_GET["oper"];
    switch($o){
        case 1:
            $r = $n * 2;            
            break;
        case 2:
            $r = pow($n, 3);
            break;
        case 3:
            $r = sqrt($n);            
    }
    echo $r
    ?>
</body>
</html>