<?php

class EntityManager {

  private $_db;
  protected $table;

  final public function __construct($db) {

    $this->_db = $db; // $this est utilisé pour un objet (self pour  les classes)
    $this->table = lcfirst(str_replace('Manager','', get_called_class()));
  }

  public function flush(UserEntity $user) {
    if($user->id){

      //UPDATE
    } else {

      $query = $this->_db->prepare('INSERT INTO {$this->table}(';
      $properties = [];

      foreach ($entity as $key => $value) {
        $properties[] = $value;
      }

      $query_string .= implode(', ', $properties) . ') VALUES (';

      /*
      $query->bindParam(':name', $user->name);
      $query->bindParam(':email', $user->email);
      $query->bindParam(':localisation', $user->localisation);
      $query->bindParam(':age', $user->age);
      $query->execute();

      print_r($query->errorInfo());
      */
      //INSERT
    }

  }

}
