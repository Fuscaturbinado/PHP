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
    $num = $_POST ["numeros"];  
    $lista = explode ("," , $num);
    $lista_positivos = array();
    $lista_negativos = array();
    foreach ($lista as $numero){
    if ($numero < 0){
            array_push ($lista_negativos , $numero);
        }else{
            array_push($lista_positivos , $numero);
        }

    } 
    echo "Soma dos números positivos: " . "<br>" . array_sum ($lista_positivos) . "<br>";
    echo "Lista dos números negativos:" . "<br>" .implode (", " , $lista_negativos) . "<br>"; 
    
    ?>

</body>
</html>