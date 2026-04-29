<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Biblioteca</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background: #f0f2f5; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #4CAF50; color: white; }
        .btn { padding: 8px 12px; text-decoration: none; border-radius: 4px; font-size: 14px; }
        .btn-novo { background: #2196F3; color: white; }
        .btn-edit { background: #ff9800; color: white; }
        .btn-delete { background: #f44336; color: white; }
    </style>
</head>
<body>
    <div class="container">
        <h2>📚 Meus Livros</h2>
        <a href="adicionar.php" class="btn btn-novo">Adicionar Novo Livro</a>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano</th>
                    <th>Gênero</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM livros");
                while($livro = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $livro['id']; ?></td>
                    <td><?php echo $livro['titulo']; ?></td>
                    <td><?php echo $livro['autor']; ?></td>
                    <td><?php echo $livro['ano_publicacao']; ?></td>
                    <td><?php echo $livro['genero']; ?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $livro['id']; ?>" class="btn btn-edit">Editar</a>
                        <a href="excluir.php?id=<?php echo $livro['id']; ?>" class="btn btn-delete" onclick="return confirm('Excluir este livro?')">Excluir</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>