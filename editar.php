<?php
include 'conexao.php';

$id = $_GET['id'];
$res = $conn->query("SELECT * FROM livros WHERE id = $id");
$livro = $res->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];
    $genero = $_POST['genero'];

    $sql = "UPDATE livros SET titulo='$titulo', autor='$autor', ano_publicacao='$ano', genero='$genero' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Editar Livro</title></head>
<body>
    <h2>Editar Informações</h2>
    <form method="POST">
        <input type="text" name="titulo" value="<?php echo $livro['titulo']; ?>"><br><br>
        <input type="text" name="autor" value="<?php echo $livro['autor']; ?>"><br><br>
        <input type="number" name="ano" value="<?php echo $livro['ano_publicacao']; ?>"><br><br>
        <input type="text" name="genero" value="<?php echo $livro['genero']; ?>"><br><br>
        <button type="submit">Salvar Alterações</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>