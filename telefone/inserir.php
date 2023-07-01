<?php
    include("conecta.php");

    $nome  = $_POST["nome"];
    $email       = $_POST["email"];
    $telefone      = $_POST["telefone"];

    $comando = $pdo->prepare("INSERT INTO telefone (nome, email, telefone) VALUES(?,?,?)" );
    $resultado = $comando->execute([$nome,$email,$telefone]);

    // Para voltar no formulário:
    header("Location: index.html");


?>