<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";  // Altere conforme seu usuário de banco de dados
$password = "";  // Coloque a senha do banco de dados
$dbname = "seu_banco";  // Nome do banco de dados

// Cria uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
