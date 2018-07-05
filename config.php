<?php
session_start();

try {
    $pdo = new PDO("mysql:dbname=classificados;host=localhost", "admin", "admin@12");
} catch ( PDOException $e) {
    echo "FALHOU: ".$e->getMessage();
    exit;
}
?>
