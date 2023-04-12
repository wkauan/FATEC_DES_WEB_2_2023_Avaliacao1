<?php 
    session_start();

    if ($_SESSION['login'] !== TRUE) {
        header('Location: index.php');
    }

    $arquivo = fopen("dados.txt", "r");

    // não consegui mostrar os dados

    fclose ($arquivo);
?>