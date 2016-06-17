<?php

class UserManager {

  private $_db;

    public function __construct($db) {

      $this->_db = $db; // $this est utilisé pour un objet (self pour  les classes)
    }

    public function flush(UserEntity $user) {
      if($user->id){

        //UPDATE
      } else {

        $query = $this->_db->prepare('
        INSERT
        INTO user(name, email, localisation, age, `created`, `update`)
        VALUES (:name, :email, :age, NOW(), NOW())');

        $query->bindParam(':name', $user->name);
        $query->bindParam(':email', $user->email);
        $query->bindParam(':localisation', $user->localisation);
        $query->bindParam(':age', $user->age);

        $query->execute();

        print_r($query->errorInfo());
        //INSERT
      }
    }

  }
