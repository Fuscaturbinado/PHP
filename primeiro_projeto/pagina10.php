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
        $palavra = $_POST ["palavra"];
        $numero = 5;
        $resultado = "";
        for ($i = $numero; $i >=1; $i--){
            $resultado .= $palavra;
            echo $resultado . "<br>";
            
        }
        ?>
    </center>
</body>
</html>