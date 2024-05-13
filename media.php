<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Sesi</title>
</head>
<body>
    <?php

    echo "<h1> Cálculo das médias dos alunos do 3A do Sesi moreno <h1>";

    function calcularMedia($notas) {
        $soma = array_sum($notas);
        $quantidade = count($notas);
        $media = $soma / $quantidade;
        return $media;
    }

    $notas = array( 8, 7, 10);
    $media = calcularMedia($notas);
    echo "A média do aluno é: $media";

    if($media>= 8) {
        echo "<p style='color : green'> O aluno foi aprovado";
    }else{
        echo "<p style='color : red'> O aluno foi reprovado";
    };
    ?>
    
</body>
</html>