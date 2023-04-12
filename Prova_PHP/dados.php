<?php 
    session_start();

    if ($_SESSION['login'] !== TRUE) {
        header('Location: index.php');
    }

    $arquivo = "dados.txt";

    if (file_exists($arquivo)) {
        $informacoes = file($arquivo);
    }

    echo "<h2>Dados da locação do livro</h2>";

    
    foreach ($informacoes as $linhas) {
        echo $linhas. "<br>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dados</title>
</head>
<body>
    <br>
    <a href="cadastro.php">Voltar</a>
    
</body>
</html>