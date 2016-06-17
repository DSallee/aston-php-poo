<?php

abstract class Entity implements ContentEntityInterface
{

  /*** Attributes: ***/

  public $update;

  // Permet d'hydrate des objets d'entités
  private function hydrate($data, $entity) {

    foreach ($data as $property => $value) {
      if (property_exists(__CLASS__, $property)){
        $entity->$property = $value;
      }
    }

    return $entity;
  }

  public static $create($data){

    $entity = get_called_class();
    return self::hydrate($data new $entity);
    /*debug + TAB: Affiche le code de debuggage grace au fichier snippets.cson*/
  }

  public function delete($data) {
  }

  /**
   * La méthode save permet de sauvegarder les informations de l'utilisateur
   * en base de donnée.
  */
  public function save() {

    $db = new PDO('mysql:host=localhost;dbname=aston', 'root', 'paris');

    // $manager = new UserManager($db);
    $entity_class = get_class($this);                         // => UserEntity
    $class = str_replace('Entity', 'Manager', $entity_class); // => UserManager
    $manager->new $class($db);                                // => new UserManager($db)
    $manager->flush($this);
    return $this;
  }

  public function load() {
  }


}
