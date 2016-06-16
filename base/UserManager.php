<?php


/**
 * class User
 *
 */
class UserManager {

  private $_bdd; // = new PDO('mysql:host=localhost; dbname=aston', 'root', 'paris');

  public function __construct($bdd) {
    $this->_bdd = $bdd;
  }

  public function flush($user) {
    
  }

}
