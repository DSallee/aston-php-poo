<?php


/**
 * class FormLogin
 *
 */
class Form
{

  /*public function __construct() {

    parent::__construct;
    print 'Hello world !';
  }*/

  public function render() {

    $child_class = get_called_class();
    $proprieties = get_class_vars($child_class);
    $form_markup = '<form method="post">';

    foreach ($proprieties as $field) {

      $form_markup .= $this->generateField($field);
    }

    $form_markup .= '</form><br><br>';

    return $form_markup;
  }

  private function generateSubmit($value) {

    return '<input type="submit" value="' . $value . '" />';
  }

  private function generateField($field) {

    $field_markup = NULL;
    $tag_open = NULL;
    $attributes = NULL;

    if ($field['field'] == 'input') {

      $tag_open = '<' . $field['field'] . ' type="' . $field['type'] . '" ';
      $tag_close = ' /><br><br>';

    }
    elseif ($field['field'] == 'textarea') {

      $tag_open = '<' . $field['field'] . '>';
      $tag_close = '</' . $field['field'] . '><br><br>';

    }

    foreach ($field['attributes'] as $attribute => $value) {
      $attributes .= $attribute . '="' . $value . '" ';
    }

    $field_markup = $tag_open . ' name="' . $field['name'] . '" ' . $attributes . $tag_close;

    return $field_markup;
  }











} // end of FormLogin
