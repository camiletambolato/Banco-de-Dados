<?php
$host = "192.168.10.81";
$port = "5432";
$banco = "levelup";
$usuario = "postgres";
$senha = "Camile07122009";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>