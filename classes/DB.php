<?php
include 'config.php';

class DB {
    private static $pdo;
    public static function connetion() {
    if (!isset(self::$pdo)) {
        try {
            self::$pdo = new PDO('mysql:host='.DB_HOST.'; db_name='.DB_NAME, DB_USER, DB_PASSWORD);
           } catch (PDOException $e) {
               echo $e->getMessage();
           }
       }
     }
  }
?>