<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Passagem por Referência</title>
</head>
<body>
    <div>
        <?php
        
        function teste($x){
            $x += 2;
            echo "<p>O valor de X e $x</p>";
        }
        
        $a=3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
        
        //& passagem por referência

        function teste1(&$x){
            $x += 2;
            echo "<p>O valor de X e $x</p>";
        }
        
        $a=3;
        teste1($a);
        echo "<p>O valor de A é $a</p>";
        
        ?>
    </div>
</body>
</html>