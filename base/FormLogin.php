<?php

// Hydratation
class FormLogin extends Form
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
    ],
  ];

  public $pass = [
    'field' => 'input',
    'type' => 'password',
    'name' => 'pass',
    'attributes' => [
      'placeholder' => 'Votre pass',
    ],
  ];

} // end of FormLogin
