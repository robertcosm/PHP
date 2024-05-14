<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Sesi</title>
</head>
<body>
    <?php

    echo "<h1> Cálculo das médias dos alunos do 3A do Sesi moreno <h1>";
    $nome = $_GET['nomeAluno'];
    $nota1= $_GET['n1'];
    $nota2= $_GET['n2'];
    $nota3= $_GET['n3'];
    echo "<h1>Média do aluno $nome</h1>";

    $media = ($nota1 + $nota2 + $nota3) / 3;
    $mediaArredondada = round($media);

    echo "A média do aluno é: $mediaArredondada";

    if($mediaArredondada>= 8) {
        echo "<p style='color : green'> O aluno foi aprovado";
    }else{
        echo "<p style='color : red'> O aluno foi reprovado";
    };
    ?>
    
</body>
</html>