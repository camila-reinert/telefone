<?php
    include("conecta.php");
    // Para pegar o texto dos inputs:
    $telefone  = $_GET["T"];
    

    $comando = $pdo->prepare("DELETE FROM telefone WHERE telefone=$telefone");

    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: telefone.html");
?>