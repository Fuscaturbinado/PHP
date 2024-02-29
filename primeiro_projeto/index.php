<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 1</title>
    <link rel="stylesheet" href="style.css">

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
    <center><H1 style="font-size= 500%">Atividades</H1></center>
    <form action="pagina2.php" method='POST'>
    <center><p>Soma altaerada.  Leia 2 números e efetue a adição. Se o valor somado seja
maior que 20, este deverá ser apresentado somando-se a ele mais 8; se o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.
</p>
    <input type= 'text' method='POST' name='numero1'>
    <input type= 'text' method='POST' name='numero2'>
    <input type= 'submit'></center>
   </form>



    <form action="pagina3.php" method='POST'>
    <center><p>Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum deste. 2</p>
    <input type="text" name = 'numero'>    
    <input type= 'submit' value='Enviar'></center>
    </form>



    <form action="pagina4.php" method='POST'>
    <center><p>Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir o nome e a mensagem: NÃO ACEITA.</p>
    Sua idade
    <input type="text" name = 'idade'>
    Seu nome
    <input type="text" name = 'nome'>
    <!-- <input type="text" name = 'sexo'> -->
    <input type= 'submit'valure="Enviar"></center>
    </form>


    <form action="pagina5.php" method='POST'>
    <center><p>Entrar com 3 números e imprimi-los em ordem decrescente</p>
    <input type="text" name = "decrecente1">
    <input type="text" name = "decrecente2">
    <input type="text" name = "decrecente3">
    <input type= 'submit'></center>
    </form>


    <form action="pagina6.php" method='POST'>
    <center><p>Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados. Também verififca se esse triangulo existe.</p>

    <input type ="text" name='lado1'>
    
    <input type ="text" name='lado2'>
    
    <input type ="text" name='lado3'>
    
    <input type= 'submit'></center>
    </form>


    <form action="pagina7.php" method='POST'>
    <center>
    <p>Digite o livro a ser emprestado:</p>
        <input type="text" name="livro" id="livro">
        <br>
        <p>Você é um professor ou um aluno?(p/a):</p>
        <input type="text" name="pessoa" id="pessoa">
        <br>    
        <input type="submit" value="Enviar">


    </center>
    </form>


    <!-- <form action="pagina8.php" method='POST'> -->
    <!-- <center><p>Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.</p> -->
    <!-- <input type= 'submit'></center> -->
    <!-- </form> -->


    <form action="pagina8.php" method='POST'>
    <center><p>Entrar com o número de vezes que se deseja imprimir a palavra SOL.</p>
    <input type="text" id="numero" name="numero">
    <input type= 'submit'></center>
    </form>


    <form action="pagina9.php" method='POST'>
    <center><p>Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos.</p>
    <input type="text" name="numeros" id="numeros">
        <br>

    <input type= 'submit'></center>
    </form>


    <form action="pagina10.php" method='POST'>
    <center><p>Criar um algoritmos que entre com uma palavra e imprima conforme o exemplo
◦ Palavra: sonho
<br>
◦ SONHO
<br>
◦ SONHO SONHO
<br>
◦ SONHO SONHO SONHO
<br>
◦ SONHO SONHO SONHO SONHO
<br>
</p>
<input type="text" name="palavra" id="palavra">
        <br>

    <input type= 'submit'></center>
    </form>


    <br>
    <br>
    



    
</body>
</html>