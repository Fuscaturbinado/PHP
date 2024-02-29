<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
h1{
    font-size: 50
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
</Style>

</head>
<body  class ="fundo">
        <center>
            <h1>A ordem é! </h1>
        <?php

       $numeros = array ($_POST['decrecente1'], $_POST['decrecente2'], $_POST['decrecente3']);
       arsort($numeros);

       foreach ($numeros as $numero){

        echo $numero . "  ";
       }
        
         


?>
        </center>

</body>
</html>