<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Funções</title>
</head>
<body>
    <div>
        <?php
        
        function soma ($a,$b){
            $s=$a+$b;
            echo "<p>$s</p>";
        }
        soma(3,4);

        $x=300;
        $y=350;
        soma($x,$y);

        function subtracao ($c,$d){
            $res=$c-$d;
            return "<p>$res</p>";
        }
        $res=subtracao(50,45);
        echo $res;

        $c=450;
        $d=87;
        $res=subtracao($c,$d);
        echo $res;

        //Multiplos parâmetros
        function multiplicacao(){
            //cria vetor 
            $p=func_get_args();
            // retorna n° de argumentos
            $tot=func_num_args();
            $m=1;
            for($i=0;$i<$tot;$i++){
                $m=$m*$p[$i];
            }
            return $m;
        }

        $r=multiplicacao(5,6,1,8);
        echo $r;

        ?>
    </div>
</body>
</html>