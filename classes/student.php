<?php
include 'DB.php';

class Student{
    private $table = 'tbl_student';
    private $name;
    private $dep;
    private $age;

    public function setName($name){
        $this->name = $name;
    }
    
    public function setDep($dep){
      $this->dep = $dep;
    }

    public function setAge($age){
        $this->age = $age;
      }


    //insert data in database
    public function insert(){
        $sql = "INSERT INTO $this->table (name, dep, age) VALUES (:name, :dep, :age)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':dep',$this->dep);
        $stmt->bindParam(':age',$this->age);
        return $stmt->execute();
    }

    public function update($id){
        $sql = "Update $this->table SET name=:name, dep=:dep, age=:age WHERE id=:id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':dep',$this->dep);
        $stmt->bindParam(':age',$this->age);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }


    public function readById($id){
        $sql = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(); //fetching only id
     }

    public function readAll(){
      $sql = "SELECT * FROM $this->table";
      $stmt = DB::prepare($sql); 
      $stmt->execute();
      return $stmt->fetchAll();
    }

    public function delete($id){
      $sql = "DELETE FROM $this->table  WHERE id = :id";
      $stmt = DB::prepare($sql);
      $stmt->bindParam(':id', $id);
      return $stmt->execute();
    }
}











