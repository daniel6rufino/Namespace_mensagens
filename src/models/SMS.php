<?php
namespace Mensagem\models;

use Mensagem\interface\InterfaceMensageiro;

class SMS implements InterfaceMensageiro {
    public function enviar(){
        echo "Mensagem enviada por SMS";
    }
}