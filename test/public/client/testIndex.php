<?php
include '../../../vendor/autoload.php';

use tiendamdq\controller\controllerClient;

$view = new ControllerClient();

$direction = '../../../public/components/';

$view->dir($direction)->view('header');
$view->dir($direction)->view('navbar');
$view->dir($direction)->view('footer');

