<?php

include 'btn.php';

$manager = new \MongoDB\Driver\Manager("mongodb://mrb-mongodb");

$bw = new \MongoDB\Driver\BulkWrite;

$filter = ['nome' => 'Maria'];

$bw->delete($filter);

$manager->executeBulkWrite('raiz.academicos', $bw);

exibirBotao();
