<?php


/**
 * class User
 *
 */
class UserEntity
{

  /** Aggregations: */

  /** Compositions: */

   /*** Attributes: ***/

  /**
   *
   * @access public
   */
  public $id;

  /**
   *
   * @access public
   */
  public $name;

  /**
   *
   * @access public
   */
  public $email;

  /**
   *
   * @access public
   */
  public $localisation;

  /**
   *
   * @access public
   */
  public $age;

  /**
   *
   * @access public
   */
  public $role;

  /**
   *
   * @access public
   */
  public $create;

  /**
   *
   * @access public
   */
  public $update;


  /**
   *
   *
   * @access public
   */
  public function create() {
  } // end of member function create

  /**
   *
   *
   * @access public
   */
  public function delete() {
  } // end of member function delete

  /**
   * La méthode save() permet de sauvegarder les informations de l'utilisateur en
   * base de données.
   *
   * @access public
   */
  public function save() {

    $bdd = new PDO('mysql:host=localhost; dbname=aston', 'root', 'paris');
    $manager = new UserManager($bdd);
    $manager->flush($this); /* flush(): vérifie les informations inserer dans la base de données
                            *  via la methode post du formulaire.
                            *   si le user est créé, mets à jour les données;
                            *   si le user n'est pas créé, il le fait avec un INSERT.
                            */
  } // end of member function save

  /**
   *
   *
   * @access public
   */
  public function load() {
  } // end of member function load

  /**
   *
   *
   * @access public
   */
  public function connect() {
  } // end of member function connect

  /**
   *
   *
   * @access public
   */
  public function logout() {
  } // end of member function logout





} // end of User
?>
