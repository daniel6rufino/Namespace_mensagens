<?php

use Mensagem\factory\FactoryMensageiro;

require_once "vendor/autoload.php";

$email = FactoryMensageiro::criar("email");
$email->enviar();
