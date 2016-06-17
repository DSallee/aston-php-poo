<?php

// Hydratation
class FormRegister extends Form // extends
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/


  public $email = [
    'field' => 'input',
    'type' => 'email',
    'name' => 'email',
    'attributes' => [
      'placeholder' => 'Votre e-mail',
      'require' => TRUE,
    ],
  ];


  public $pass = [
    'field' => 'input',
    'type' => 'password',
    'name' => 'pass',
    'attributes' => [
      'placeholder' => 'Votre pass',
      'require' => TRUE,
    ],
  ];


  public $name = [
    'field' => 'input',
    'type' => 'text',
    'name' => 'name',
    'attributes' => [
      'placeholder' => 'Votre nom complet',
    ],
  ];


  public $localisation = [
    'field' => 'input',
    'type' => 'text',
    'name' => 'localisation',
    'attributes' => [
      'placeholder' => 'Votre Ville',
    ],
  ];


  public $age = [
    'field' => 'input',
    'type' => 'number',
    'name' => 'age',
    'attributes' => [
      'placeholder' => 'Votre age',
    ],
  ];

} // end of FormLogin
