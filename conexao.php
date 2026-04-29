<?php
$host = "localhost";
$usuario = "root";
$senha = ""; 
$banco = "biblioteca_db";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha ao conectar: " . $conn->connect_error);
}
?>