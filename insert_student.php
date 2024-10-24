<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . "/banco.sqlite";
$pdo = new PDO("sqlite:$databasePath");

$student = new Student(
    null,
    'Roberto Pereira',
    new \DateTimeImmutable('1990-02-10')
);

// $name = $student->name();
// $birthday = $student->birthDate()->format('Y-m-d');
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birthday)";
$statement = $pdo->prepare($sqlInsert);

$statement->bindValue(':name', $student->name());
$statement->bindValue(':birthday', $student->birthDate()->format('Y-m-d'));
$statement->execute();

// echo $sqlInsert . "\n";

// var_dump($pdo->exec($statement));

echo "Student Created";