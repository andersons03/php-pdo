<?php

namespace Alura\Pdo\infrastructure\Persistance;
class ConnectionCreator
{
  static function createConnection(){
    $caminhoBanco = __DIR__ . "/../../../banco.sqlite";
    $pdo = new \PDO("sqlite:$caminhoBanco");

    return $pdo;
  }
}
