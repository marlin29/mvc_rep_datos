<?php

require_once('modelo.php');

class Controller {
  private $model;

  public function __construct() {
    $this->model = new Model();
  }

  public function setData($data) {
    $this->model->setData($data);
  }

  public function getData() {
    return $this->model->getData();
  }
}

?>