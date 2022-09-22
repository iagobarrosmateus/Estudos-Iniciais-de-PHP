<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Atribuição</title>
</head>   
<body>
    <header>
        <h1>Variáveis</h1>
    </header>
      <div>
        <?php
        $preco = 5;
        echo "O preco do produto e R$ $preco";
        $preco = $preco +($preco*10/100);
        //$preco += ($preco*10/100);
        echo "<br>O preço com 10% de aumento e R$:" .number_format($preco,2);
        #Comentário
        /*Comentário*/ 
        $anoatual = 2022;
        echo "<br>O ano atual é $anoatual e o anoanterior é ".--$anoatual;
        ?>
    </div>
    <footer>
        <p>&copy; Iago Barros Mateus</p>
    </footer>
</body>
</html>
