<?php 
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        session_start();
        if ($_POST['usuario'] == 'fatec' && $_POST['senha'] == 'araras') {
            $_SESSION['login'] = TRUE;
            header('Location: cadastro.php');
        }   else {
            $_SESSION['login'] = FALSE;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Efetue seu login</h1>

    <form method="post">
        <p>
        <label>Usuário</label>
        <input type="text" name="usuario">
        </p>
        <p>
        <label>Senha</label>
        <input type="password" name="senha">
        </p>
        <p>
        <button type="submit">Entrar</button>
        </p>
    </form>
    
</body>
</html>