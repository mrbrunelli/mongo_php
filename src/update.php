<?php

include 'btn.php';

$manager = new \MongoDB\Driver\Manager("mongodb://mrb-mongodb");

$up = new \MongoDB\Driver\BulkWrite;

$up->update(['nome' => 'Afronesio'], ['$set' => ['nome' => 'Afronesio dos Santos']]);

$manager->executeBulkWrite('raiz.academicos', $up);

exibirBotao();
