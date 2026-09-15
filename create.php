<?php
    require 'config.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];

    $conexao->exec("INSERT INTO livros VALUES (default, '$titulo', '$autor', '$editora')");

?>  