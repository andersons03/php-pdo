<?php

use Alura\Pdo\infrastructure\Persistance\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();

$pdo->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');

echo "Banco Criado"; 