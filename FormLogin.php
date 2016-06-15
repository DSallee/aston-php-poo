<?php


/**
 * class FormLogin
 *
 */
class FormLogin
{

  /** Aggregations: */

  /** Compositions: */

  /*** Attributes: ***/

  // <input id="email" type"email" name="email" placeholder="Email" />


  public $email = [
    'field' => 'input',
    'type' => 'email',
    'id' => 'email',
    'name' => 'email',
    'attributes' => [
      'placeholder' => 'Email';
    ];

  ];

  // <input id="pwd" type="password" name="pwd" placeholder="Password" />

  public $pass = [
    'field' => 'input',
    'type' => 'password',
    'id' => 'pwd',
    'name' => 'pwd',
    'attributes' => [
      'placeholder' => 'Password';
    ];

  ];

  public function render() {

    $form_markup = '<form method"post">';
    $form_markup .= '<label>Email: </label>' . $this->generateField($this->email);
    $form_markup .= '<label>Password: </label>' . $this->generateField($this->pwd);
    $form_markup .= $this->generateSubmit('Se connecter');
    $form_markup = '</form>';

    return $form_markup;
  }

  private function generateField ($field) {
      $field_markup = NULL;
      $tag_open = NULL;
      $attributes = NULL;

      if ($field['field'] == 'input') {
        $tag_open = '<' . $field['field'] . 'type="' . $field['type'] . '"';
        $tag_close = '/>';
      }

      elseif ($field['field'] == 'textarea') {
        $tag_open = '<' . $field['field'] . '>';
        $tag_close = '/>';
      }

      foreach ($field['attributes'] as $attribute => $value) {
        $attributes .= $attribute .'="' . $value . '"';
      }

      $field_markup = $tag_open . ' name="' . $field['name'] . '" ' . $attributes . $tag_close;

      return $field_markup;
  }

  // Une fonction "private" ne peut etre utiliser que dans cette classe. Sinon on obtient une Fatal Error : Call to private...
  private function generateSubmit($value) {

    return '<input type"submit" value="' . $value . '" />';
  }


} // end of FormLogin
?>
