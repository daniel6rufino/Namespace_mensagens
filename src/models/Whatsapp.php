<?php
namespace Mensagem\models;

use Mensagem\interface\InterfaceMensageiro;

class Whatsapp implements InterfaceMensageiro {
    public function enviar(){
        echo "Mensagem enviada por Whatsapp";
    }
}