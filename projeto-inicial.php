<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Anderson Souza',
    new \DateTimeImmutable('1994-07-03')
);

echo $student->age();
