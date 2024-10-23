<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$databasePath");

$student = new Student(
    null,
    'Anderson Souza',
    new \DateTimeImmutable('1994-07-03')
);

$name = $student->name();
$birthday = $student->birthDate()->format('Y-m-d');

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('$name','$birthday')";

echo $sqlInsert . "\n";

var_dump($pdo->exec($sqlInsert));

echo "Student Created";