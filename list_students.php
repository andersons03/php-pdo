<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . "/banco.sqlite";

$pdo = new PDO("sqlite:$databasePath");

$statement = $pdo->query("SELECT * FROM students");
// $statement = $pdo->query('SELECT * FROM students WHERE id = 1;');

//Bring the specific column
// $studenTList = $statement->fetchAll(PDO::FETCH_COLUMN, 1);


while($studentData = $statement->fetch(PDO::FETCH_ASSOC)){
  var_dump($studentData['name']);

  $student = new Student(
    $studentData['id'],
    $studentData['name'],
    new \DateTimeImmutable($studentData['birth_date'])
  );

  echo $student->age();
}