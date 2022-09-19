<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Operadores Aritiméticos</title>
</head>   
<body>    
    <header>
        <h1>Operadores Aritméticos</h1>
        
    </header>
      <div>        
        <?php
        $n1 = 11;
        $n2 = 5;
        $n3 = 5.8;
        echo "A soma entre $n1 e $n2 é:". ($n1 + $n2);        
        echo "<br/> O resto da divisão entre $n1 e $n2 é:".($n1 % $n2); 
        echo "<br/> A multiplicação entre $n1 e $n2 é:".($n1 * $n2); 
        echo "<br/> A Subtração entre $n1 e $n2 é:".($n1 - $n2); 
        echo "<br/> A divisão entre $n1 e $n2 é:".($n1 / $n2); 
        echo "<br/> A raiz quadrada de $n1 é:".sqrt($n1);
        echo "<br/> Valor arredondado de $n3 é:".round($n3);
        echo "<br/> A potênciação $n1<sup>$n2</sup> é:".pow($n1 , $n2);
        echo "<br/> O valor de $n1 em moeda é R$". number_format($n1,2, ",");
        ?> 
    </div>
    <footer>
        <p>&copy; Iago Barros Mateus</p>
    </footer>
</body>
</html>


