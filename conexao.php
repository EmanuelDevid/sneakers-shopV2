<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = 'davidspfcfcb1992-21';
$dbname = 'sneakers';

try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$dbname", "$usuario", "$senha");
} catch(PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
