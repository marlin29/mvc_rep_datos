<?php

class Model {
  private $data;

  public function __construct() {
    $this->data = array();
  }

  public function getData() {
    return $this->data;
  }

  public function setData($data) {
    $this->data = $data;
  }
}

?>