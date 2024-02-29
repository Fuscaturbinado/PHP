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
    background-color: DodgerBlue;


    }
    </style>
</head>
<body class= "fundo">
    <center> 
                <h1>O numero é divisivel por</h1>
        <?php    
        $n = $_POST['numero'];
        
        
        if($n % 10 == 0){
    
            echo "$n é divisivel por 10, 5 e 2.";

        }
        elseif ($n % 5 == 0) {

            echo "$n é divisivel por 5";

        }
        elseif ($n % 2 == 0) {

         
            echo "$n é divisivel por 2";

        }
        else{

            echo "Ela não é divisivel por 10, 5 e 2.";

        }
        
    ?>
</center>




</body>
</html>