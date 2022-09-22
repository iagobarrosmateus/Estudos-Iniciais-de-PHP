<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Operadores Relacionais</title>
</head>   
<body>
    <header>
        <h1>Operadores Relacionais</h1>
    </header>
      <div>
        <?php
        $n1=5;
        $n2=10;
        $tipo = "op";
        //(se alguma coisa) ? (então) : (senão)
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "$r";

        $a = 3;
        $b = "3";
        //igual
        $r  = ($a == $b) ? "SIM" : "NÃO";
        echo "<br>As variáveis A e B são iguais: $r";
        //igual e também do mesmo tipo
        $r  = ($a === $b) ? "SIM" : "NÃO";
        echo "<br>As variáveis A e B são iguais: $r";

        $nota1 = 8;
        $nota2 = 4;
        $nota3 = 6;
        $media = ($nota1+$nota2+$nota3)/3;
        $r=$media >7 ? "Aprovado" : "Reprovado";
        echo "<br>$r";

        ?>

        
    </div>
    <footer>
        <p>&copy; Iago Barros Mateus</p>
    </footer>
</body>
</html>