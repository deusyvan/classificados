<?php
session_start();

try {
    $pdo = new PDO("myslq:dbname=classificados;host=localhost", "admin", "admin");
} catch ( PDOException $e) {
    echo "FALHOU: ".$e->getMessage();
    exit;
}