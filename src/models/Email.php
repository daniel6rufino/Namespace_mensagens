<?php
namespace Mensagem\models;

use Mensagem\interface\InterfaceMensageiro;

class Email implements InterfaceMensageiro {
    public function enviar(){
        echo "Mensagem enviada por email";
    }
}