<?php
    require 'config.php';

    $id = $_GET['id'];

    $stmt = $conexao->prepare("DELETE FROM livros WHERE id = ?");

    $stmt->execute([$id]);

    header("Location: read.php");
    exit;
?>