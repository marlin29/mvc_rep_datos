<?php

require_once('modelo.php');
require_once('controlador.php');

$controller = new Controller();

if (isset($_POST['data'])) {
	$data = $_POST['data'];
	$controller->setData($data);
	$message = 'Valor guardado con éxito.';
}

include 'vista.php';

?>