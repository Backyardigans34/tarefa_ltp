<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM livros WHERE id = $id");
}

header("Location: index.php");
?>