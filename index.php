<?php
  /*****************************      Méthode Hydratation    *****************************/

  /*require_once 'base/Form.php';
  require_once 'base/FormLogin.php';
  require_once 'base/FormRegister.php';

  // hydratation : attribution de valeur a un obj de façon automatique qu'on appelle via le constructeur.
  // est de moins en moins utilisé.
  $registerForm = new FormRegister();
  $form1 = $registerForm->render();

  $loginForm = new FormLogin();
  $form2 = $loginForm->render();

  print '<label>Register</label><br>' . $form1 . '<label>Login</label><br>' . $form2;*/


  /*$form = $registerForm->render();
  print $form;*/

  /*****************************      Autre Méthode     *****************************/

  require_once 'base/UserManager.php';
  require_once 'base/UserEntity.php';

  $_POST = [
    'name' => 'Suku',
    'email' => 'suku@aston.fr',
    'pass' => 'p@$$word',
    'localisation' => 'Ngorowai',
    'age' => '29',
  ];

  /*
    Instance UserEntity
    ::create est une methode qui récupère les données du formulaire en post
  */

  //$user = UserEntity::create($_POST);
  $user = new UserEntity($_POST);

  $user->name = $_POST['name'];
  $user->email = $_POST['email'];
  $user->pass = $_POST['pass'];
  $user->localisation = $_POST['localisation'];
  $user->age = $_POST['age'];

  $user->create = time(); // date de création du user
  $user->update = time(); // date de maj du user

  // Afficher la liste des valeurs des variables des champs du formulaire
  print '<pre>';
  print_r($user);
  print '</pre>';

  $user->save(); // Enregistrement du user
