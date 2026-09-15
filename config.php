<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "Aluno1234";
    $db = "livraria";

    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $senha);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "conexão FAIL - " . $e->getMessage();  
    }
?>