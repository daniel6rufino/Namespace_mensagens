<?php

use Mensagem\factory\FactoryMensageiro;

require_once "vendor/autoload.php";

$factory = new FactoryMensageiro();
$email = $factory->criar("email");
$email->enviar();