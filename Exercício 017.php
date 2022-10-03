<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <div>
        <?php
        $p = "Leite";
        $pr = 4.5;
        //echo "O $p custa R$ $pr";
        printf ("<br>O %s custa R$ %.2f</br>", $p,$pr);

        $x[0]=1;
        $x[1]=2;
        $x[2]=3;
        //print_r($x);

        $v2=array(3,5,7,10,11,17);
        //print_r($v2);

        $t="Aqui temos um texto gigante criado pelo PHP";
        $res= wordwrap($t,20,"<br/>");
        echo $res;
        $tamanho=strlen($t);
        echo $tamanho


        ?>
    </div>
</body>
</html>