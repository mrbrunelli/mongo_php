<?php

include 'btn.php';

$manager = new \MongoDB\Driver\Manager("mongodb://mrb-mongodb");

$query = new \MongoDB\Driver\Query([]);

$cursor = $manager->executeQuery('raiz.academicos', $query);

foreach ($cursor as $c) {
    echo $c->nome . " " . $c->idade . "<br>";
}

exibirBotao();
