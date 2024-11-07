<?php
use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\infrastructure\Persistance\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$statement = $pdo->query("SELECT * FROM students");
// $statement = $pdo->query('SELECT * FROM students WHERE id = 1;');

//Bring the specific column
// $studenTList = $statement->fetchAll(PDO::FETCH_COLUMN, 1);

$studenTList = [];

while($studentData = $statement->fetch(PDO::FETCH_ASSOC)){
  // var_dump($studentData['name']);

  $studenTList = new Student(
    $studentData['id'],
    $studentData['name'],
    new \DateTimeImmutable($studentData['birth_date'])
  );

  // echo $student->age();
}

var_dump($studenTList);