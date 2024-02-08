<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><p>A soma dos numeros é:</p>
    <?php
        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];
        
        $c = $num1 + $num2;

        if($c > 20){
            $t = $c + 8 ; 

            echo $t;

        }
        else {
            $t1 = $c - 5;

            echo $t1;

        }
        
    ?>
    
</center>
</body>
</html>