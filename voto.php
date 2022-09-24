<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        
        $a = $_GET["ano"];
        $i = date("Y") - $a;
        if ($i < 18 && $i >= 16 || $i>65){
            echo"Voto opcional";
        }else if($i <16){
            echo "Não vota";
        }        
        else
            echo"Voto obrigatório";
        
        ?>
    </div>
</body>
</html>