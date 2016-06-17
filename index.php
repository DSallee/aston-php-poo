<?php
  /***********************************************************************/

  require_once 'base/Form.php';
  require_once 'base/FormRegister.php';
  require_once 'base/FormLogin.php';
  require_once 'base/Entity.php';
  require_once 'base/UserManager.php';
  require_once 'base/UserEntity.php';


  /******* Affichage des formulaires par une methode d'Hydratation *******/

  $registerForm = new FormRegister(); // contient tableau de contenu formulaire
  $form1 =  $registerForm->render();

  $loginForm = new FormLogin(); // contient tableau de contenu formulaire
  $form2 =  $loginForm->render();

  print '<label>Register</label><br />' . $form1;
  print '<label>Login</label><br />' . $form2;


  /***********************************************************************/

  $_POST = [
    'name' => 'Suku',
    'email' => 'suku@aston.fr',
    'pass' => 'p@$$w0rd',
    'localisation' => 'Ngorowai',
    'age' => '29',
  ];

  //1//
  $user = UserEntity::create($_POST)->save();

  /*debug + TAB: Affiche le code de debuggage grace
     au fichier snippets.cson
  print '<pre>$user => <br />';
  print_r($user);
  print "</pre>";
  print '<code><em>From class ' . __CLASS__ . ' in function ' . __FUNCTION__ . '() line ' . __LINE__ . ' in file ' . __FILE__ . '</em>.</code>';*/

  //2//
  //$user = new UserEntity($_POST); //methode d'hydratation

  //3//
  /*$user->name = $_POST['name'];
  $user->email = $_POST['email'];
  $user->pass = $_POST['pass'];
  $user->localisation = $_POST['localisation'];
  $user->age = $_POST['age'];*/


  // $user->save();


  /***********************************************************************/
