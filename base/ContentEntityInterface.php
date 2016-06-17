<?php

interface ContentEntityInterface
{
  public $create;
  public $update;

  public function delete();
  public function save();
  public function load();

}
