<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Livro - Livraria</title>
    </head>
    <body>
        <div>
            <h1 style="margin: 2px 0px 10px 0px">Livraria Happy Books - Cadastrar Livros</h1>
        </div>
  
        <form method="POST" action="create.php">
            <p>
            <label for="titulo">Título</label><br>
            <input id="titulo" type="text" name="titulo" required>
            </p>
  
            <p>
            <label for="autor">Autor</label><br>
            <input id="autor" type="text" name="autor" required>
            </p>
  
            <p>
            <label for="editora">Editora</label><br>
            <input id="editora" type="text" name="editora" required>
            </p>
  
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
  
            <button type="button" onclick="window.location.href='read.php'">Listar Livros</button>
        </form>
    </body>
</html>