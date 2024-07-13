<?php

namespace App\Database;

use PDO;
use PDOException;

/**
 * Classe que implementa a conexão com o banco de dados.
 * 
 * Utiliza a extensão PDO do PHP para realizar a conexão com o banco de dados, retornando
 * um objeto PDO para ser utilizado em consultas SQL.
 */
class DatabaseConnection
{
   private static $instance = null;
   private $pdo;

   private function __construct($config)
   {
      $dsn = "mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'];
      $options = array(
         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      );

      try {
         $this->pdo = new PDO($dsn, $config['user'], $config['password'], $options);
      } catch (PDOException $e) {
         handleAppError(null, $e);
      }
   }

   public static function getDbInstance($config)
   {
      if (self::$instance === null) {
         self::$instance = new self($config);
      }
      return self::$instance;
   }

   public function getDbConnection()
   {
      return $this->pdo;
   }
}
