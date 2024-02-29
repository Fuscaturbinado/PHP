<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1{
        font-size: 500%;
    }
    p{
    font-size: 200%;
    width: 60%;

    }
    .tesxtopag2{
    font-size : 100%;

    }

    .fundo{
    background-color: DodgerBlue


    }
    </style>
</head>
<body class= "fundo">
    <h1>Verificação</h1>
        <?php
            $nomenclatura= $_POST ['nome'];
            $Idade = $_POST ['idade'];
            $sex = $_POST ['sexo'];
            if  ($Idade >= 25) {
            echo ("$nomenclatura foi aceita para fazer parte do nosso grupo de ofertas!");
            } else{
                echo ("$nomenclatura não foi aceita para fazer parte do grupo de ofertas!");

            }

        ?>
</body>
</html>