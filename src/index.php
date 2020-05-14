<?php

include 'btn.php';

// No lugar de localhost devo colocar o nome do container que está rodando o MongoDB
$manager = new \MongoDB\Driver\Manager("mongodb://mrb-mongodb");

$db = new \MongoDB\Driver\BulkWrite;

$db->insert(['nome' => 'Maria', 'idade' => 23]);

$manager->executeBulkWrite('raiz.academicos', $db);

exibirBotao();
