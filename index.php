<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu pragraminha em PHP</title>
</head>
<body>
    <h1>Isso é html</h1>
    <?php
        $dia = "Terça";
        $temperatura = 18;
        if ($temperatura > 25) {
            $clima = "Ensolarado";
        }elseif($temperatura <=25 && $temperatura >=18){
            $clima = "Ensolarado";
        }elseif($temperatura < 18){
            $clima = "Nevando";
        }

        echo "O clima hoje está $clima, a temperatura está $temperatura graus, o dia hoje é $dia-feira. <br>";
        $msg = "Bem vindo  ";
        $user = "Joran";

        echo $msg.$user;

        $nomes = array("João Victor","Roberto Pink","Jennifer","Emylle","B. Letigo");
        
        echo "<br>";

        for($i=0; $i < 5; $i++){
            echo "<br>";
            echo $nomes[$i];
        };
        echo "<br><hr>";
        $total = 0;
        foreach ($nomes as $nome) {
            echo "<br>";
            echo $nome;
            $total++ ; 
        };

        echo "<br>";
        echo "<b>A quantidade total de nomes é $total </b>";
        

    ?>
</body>
</html>