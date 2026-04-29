<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO livros (titulo, autor, ano_publicacao, genero) VALUES ('$titulo', '$autor', '$ano', '$genero')";
    
    if ($conn->query($sql)) {
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Novo Livro</title></head>
<body>
    <h2>Cadastrar Livro</h2>
    <form method="POST">
        <input type="text" name="titulo" placeholder="Título do Livro" required><br><br>
        
        <input type="text" name="autor" placeholder="Nome do Autor" required><br><br>

        <input type="number" name="ano" placeholder="Ano de Publicação"><br><br>
        <input type="text" name="genero" placeholder="Gênero Literário"><br><br>
        
        <button type="submit">Cadastrar</button>
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>