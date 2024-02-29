<!DOCTYPE html>
<html lang="en">
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
<body class="fundo">
<center>
    <?php
    $livro = $_POST ["livro"];
    $pessoa = $_POST ["pessoa"];
    
        echo "Livro a ser emprestado: " . $livro;
        echo "<br>";
      if ($pessoa == "p"){
        echo "Devolver o livro dentro de 10 dias.";    
} elseif ($pessoa == "a"){
        echo "Devolver o livro dentro de 3 dias.";
} else{
        echo "Usuário não encontrado, favor escolher entre Professor (p) e Aluno (a)";   
}
    ?>
    </center>

</body>
</html>