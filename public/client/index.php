<?php
include '../../vendor/autoload.php';

use tiendamdq\controller\controllerClient;

$view = new ControllerClient();

$direction = '../components/';


# Define the view
$view->dir($direction)->view('header');
$view->dir($direction)->view('navbar');
$view->dir($direction)->view('carousel');
$view->dir($direction)->view('most_selled_products');
$view->dir($direction)->view('footer');

# comentario 3