<!DOCTYPE html>

<?php
    $dadoJogador1 = rand(1,6);
    $dadoJogador2 = rand(1,6);
    $resultadoJogador = $dadoJogador1 + $dadoJogador2;

    $dadoMaquina1 = rand(1,6);
    $dadoMaquina2 = rand(1,6);
    $resultadoMaquina = $dadoMaquina1 + $dadoMaquina2;

    if($resultadoJogador > $resultadoMaquina)
    {
        $msgVenceu = "O jogador venceu com o total de ". $resultadoJogador." pontos!"; 
    } else if ($resultadoMaquina > $resultadoJogador){
        $msgVenceu = "A maquina venceu com o total de ". $resultadoMaquina." pontos!";
    } else {
        $msgVenceu = "Foi um empate!!";
    }
?> 

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Jogo de Dados</title>
</head>
<body>
<section class="text-center">
    <div>
        <h1>Jogo de Dados</h1>
        <button onClick="window.location.reload();">Jogar os dados novamente!</button>
    </div>
    
    <hr>

    <div>
    </div>
    <h3>Dados do Jogador</h3>
    <?php
    switch ($dadoJogador1){
            case 1:
                $imgLado1 = '<img src="lado1.png" class="center">';
                echo $imgLado1;
                break;
            case 2:
                $imgLado2 = '<img src="lado2.png">';
                echo $imgLado2;
                break;
            case 3:
                $imgLado3 = '<img src="lado3.png">';
                echo $imgLado3;
                break;
            case 4:
                $imgLado4 = '<img src="lado4.png">';
                echo $imgLado4; 
                break;
            case 5:
                $imgLado5 = '<img src="lado5.png">';
                echo $imgLado5;
                break;
            case 6:
                $imgLado6 = '<img src="lado6.png">';
                echo $imgLado6;
                break;
        }

        switch ($dadoJogador2){
            case 1:
                $imgLado1 = '<img src="lado1.png">';
                echo $imgLado1;
                break;
            case 2:
                $imgLado2 = '<img src="lado2.png">';
                echo $imgLado2;
                break;
            case 3:
                $imgLado3 = '<img src="lado3.png">';
                echo $imgLado3;
                break;
            case 4:
                $imgLado4 = '<img src="lado4.png">';
                echo $imgLado4; 
                break;
            case 5:
                $imgLado5 = '<img src="lado5.png">';
                echo $imgLado5;
                break;
            case 6:
                $imgLado6 = '<img src="lado6.png">';
                echo $imgLado6;
                break;
        }
    ?>
<h3 class="pt-5">Dados da Máquina</h3>
<?php
    switch ($dadoMaquina1){
            case 1:
                $imgLado1 = '<img src="lado1.png">';
                echo $imgLado1;
                break;
            case 2:
                $imgLado2 = '<img src="lado2.png">';
                echo $imgLado2;
                break;
            case 3:
                $imgLado3 = '<img src="lado3.png">';
                echo $imgLado3;
                break;
            case 4:
                $imgLado4 = '<img src="lado4.png">';
                echo $imgLado4; 
                break;
            case 5:
                $imgLado5 = '<img src="lado5.png">';
                echo $imgLado5;
                break;
            case 6:
                $imgLado6 = '<img src="lado6.png">';
                echo $imgLado6;
                break;
        }

        switch ($dadoMaquina2){
            case 1:
                $imgLado1 = '<img src="lado1.png">';
                echo $imgLado1;
                break;
            case 2:
                $imgLado2 = '<img src="lado2.png">';
                echo $imgLado2;
                break;
            case 3:
                $imgLado3 = '<img src="lado3.png">';
                echo $imgLado3;
                break;
            case 4:
                $imgLado4 = '<img src="lado4.png">';
                echo $imgLado4; 
                break;
            case 5:
                $imgLado5 = '<img src="lado5.png">';
                echo $imgLado5;
                break;
            case 6:
                $imgLado6 = '<img src="lado6.png">';
                echo $imgLado6;
                break;
        }
    ?>

    <div>
    <h1 class="pt-5"> <?php echo $msgVenceu ?> </h1>
    </div>
</section>
</body>
</html>