<?php 
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
    
    define("BASE_URL", "http://localhost/classificados/");
    $config['dbname'] = 'classificados';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin@12';
    
} else {
    
    define("BASE_URL", "http://meusite.com.br/");
    $config['dbname'] = 'classificados';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin';
    $config['dbpass'] = 'admin@12';
}

global $db;
try {
    
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
    
} catch ( PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>