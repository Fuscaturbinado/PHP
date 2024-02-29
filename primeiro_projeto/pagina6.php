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
    
    
    </Style>
</head>
<body class="fundo">
    <center>
        <h1>Triangulos</h1>
    <?php
            $ladoA = floatval($_POST['lado1']);
            $ladoB = floatval($_POST['lado2']);
            $ladoC = floatval($_POST['lado3']);
            if (($ladoA < $ladoB + $ladoC) && ($ladoB < $ladoA + $ladoC) &&  ($ladoC < $ladoA + $ladoC) ){
                if($ladoA == $ladoB && $ladoA ==$ladoC){
                echo "<p>Triangulo Equilátero.</p>";
            
            }
                elseif($ladoA == $ladoB || $ladoB == $ladoC || $ladoA == $ladoC ){

                echo "<p>Triangulo Isoceles.</p>";
            }
                else{
                echo "<p>Triangulo Escaleno</p>";
            }
            }else {

            echo "<p>Esse triangulo não é possivel!</p>";
    }
    
    
    
    ?>
    
</center>



</body>
</html>