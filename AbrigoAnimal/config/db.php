<?php
$host = 'localhost';  // Host do banco de dados
$dbname = 'abrigoanimal';  // Nome do banco de dados
$username = 'root';  // Usuário do banco de dados
$password = '';  // Senha do banco de dados (deixe vazio se não houver senha)

try {
    // Conectando ao banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Ativando o modo de erro
} catch (PDOException $e) {
    // Caso haja um erro na conexão
    echo 'Erro na conexão: ' . $e->getMessage();
}
?>
