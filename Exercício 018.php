<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <?php
        $n=array(30,5,90,8,2);
        $n[]=7;//adiciona elementos
        unset($n[2]);// desaloca posições
        sort($n);
        print_r($n);      
        
        $c=range(5,20,5);//outra forma de declarar vetores
        foreach($c as $valor){//ao invés de usar print_r
            echo" <br>$valor </br>";          
        }

        $v=array("nome"=> "Iago", "Idade"=>"29","Peso"=>"68");
        foreach($v as $campo => $valor){
            echo " <br> $valor </br>";
        }

        // criar matizes
        $p=array(array(2,3),array(3,4),array(9,5));
        print_r($p);

        $t=array("a","b","c","d");
        echo " O vetor tem ". count($t). " elementos ";
        print_r($t);
        array_push($t, "o");
        array_unshift($t,"u");
        print_r($t);
        
        ?>
    </div>
</body>
</html>