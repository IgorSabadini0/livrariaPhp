<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <div class="container">
        <h1 style="margin: 2px 0px 10px 0px">Livraria Happy Books - Cadastrar Livros</h1>
    </div>

    <?php
        require 'config.php';

        echo "
        <table border='1' cellspacing='0' cellpading='5'>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Editora</th>
                <th></th>
            </tr>
            ";

        $consulta = $conexao->query('SELECT * FROM livros');

        while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $id = $linha['id'];
            $titulo = $linha['titulo']; 
            $autor = $linha['autor'];
            $editora = $linha['editora'];

            echo "
                <tr>
                    <td><b>{$id}</b></td>
                    <td>{$titulo}</td>
                    <td>{$autor}</td>
                    <td>{$editora}</td>
                    <td>
                        <a href='update.php?id={$id}' style='text-decoration: none; color: blue; margin-right: 8px;'>Editar</a>
                        <a href='delete.php?id={$id}' onclick=\"return confirm('Tem certeza que deseja excluir este livro?')\" style='text-decoration: none; color: red;'>Excluir</a>
                    </td>
                </tr>
            ";
        }

        echo "</table>
            <p>
                <button type='button' onclick=\"location.href='index.php'\">Voltar</button>
            </p>
        ";
    ?>

    
</body>
</html>