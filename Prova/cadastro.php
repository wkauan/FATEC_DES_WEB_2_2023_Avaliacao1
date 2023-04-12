<?php 
    session_start();

    if ($_SESSION['login'] !== TRUE) {
        header('Location: index.php');
    }

    $dados = "dados.txt";

    $titulo = $_POST['titulo'];
    $responsavel = $_POST['responsavel'];
    $devolucao = $_POST['devolucao'];

    $arquivo = fopen('dados.txt', 'a+');

    fwrite($arquivo, $titulo);
    fwrite($arquivo, "\n");
    fwrite($arquivo, $responsavel);
    fwrite($arquivo, "\n");
    fwrite($arquivo, $devolucao);
    
    fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastre o livro que deseja alugar</h2>

    <form method="post">
        <p>
        <label>Titulo</label> <br>
        <input type="text" name="titulo">
        </p>
        <p>
        <label>Quem alugou</label> <br>
        <input type="text" name="responsavel">
        </p>
        <p>
        <label>Quando tem que devolver</label> <br>
        <input type="text" name="devolucao">
        </p>

        <button type="submit">Cadastrar</button>
    </form>

    <a href="dados.php">Mostrar dados</a> <br> <br>

    <a href="logout.php">Logout</a>
    
</body>
</html>