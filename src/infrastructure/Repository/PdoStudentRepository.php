<?php

namespace Alura\Pdo\Infrastructure\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\infrastructure\Persistance\ConnectionCreator;
use PDO;

class PdoStudentRepository implements StudentRepository{
  public PDO $connection;

  public function __construct(PDO $connection){
    $this->connection = $connection;
  }

  public function allStudents(): array
  {
    $selectAllQuery = "SELECT * FROM students";
    $statement = $this->connection->query($selectAllQuery);

    return $this->hydrateStudentList($statement);
  }
  public function studentsBirthAt(\DateTimeInterface $birthDate): array
  {
    $selectBirthQuery = "SELECT * FROM students WHERE birth_date = ?";
    $statement = $this->connection->prepare($selectBirthQuery);
    $statement->bindValue(1, $birthDate->format('Y-m-d'));
    $statement->execute();

    return $this->hydrateStudentList($statement);
  }

  public function hydrateStudentList($statement): array{
    $studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
    $studentList = [];

    foreach ($studentDataList as $studentData) {
      $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new \DateTimeImmutable($studentData['birth_date'])
      );
    }

    return $studentList;
  }

  public function save(Student $student): bool
  {

    if($student->id() === null){
      return $this->insert($student);
    }

    return $this->update($student);
  }

  function insert(Student $student): bool{
    $sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birthday)";
    $statement = $this->connection->prepare($sqlInsert);
    
    $response = $statement->execute([
      ':name' => $student->name(),
      ':birthday' => $student->birthDate()->format('Y-m-d')
    ]);

    if($response){
      $student->defineId($this->connection->lastInsertId());
    }

    return $response;
  }
  function update(Student $student): bool{
    $updateQuery = 'UPDATE student SET name = :name, birth_date = :birth_date WHERE id = :id';
    $statement = $this->connection->prepare($updateQuery);

    $statement->bindValue(':name', $student->name());
    $statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));
    $statement->bindValue(':id', $student->id(), PDO::PARAM_INT);

    return $statement->execute();
  }
  
  public function remove(Student $student): bool
  {
    $statement = $this->connection->prepare('DELETE FROM student WHERE id = :studentId');
    $statement->bindValue(':studentId', $student->id(), PDO::PARAM_INT);
    
    return $statement->execute();
  }
}