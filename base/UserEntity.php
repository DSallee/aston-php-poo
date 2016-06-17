<?php

namespace \Bundle\User\

class UserEntity extends Entity
{

   /*** Attributes: ***/
  public $id;

  public $name;

  public $email;

  public $localisation;

  public $age;

  public $role;


  public function connect() {
  }

  public function logout() {
  }

}
