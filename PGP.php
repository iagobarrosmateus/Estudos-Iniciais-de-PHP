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
    <pre>
    <div>
        <?php
        require_once 'Exercício022.php';
        $p1=new ContaBanco();
        $p2=new ContaBanco();
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(1111);
        $p2->abrirConta("CP");
        $p2->setDono("creuza");
        $p2->setNumConta(2222);

        $p1->depositar(500);
        $p2->depositar(300);

        $p2->sacar(800);
        $p1->fecharConta();
        print_r($p1);
        print_r($p2);
        ?>
    </div>
    </pre>
</body>
</html>