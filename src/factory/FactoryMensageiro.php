<?php
namespace Mensagem\factory;

use Mensagem\interface\InterfaceMensageiro;
use Mensagem\models\Email;
use Mensagem\models\SMS;
use Mensagem\models\Whatsapp;

class FactoryMensageiro {
    public static function criar(string $mensagem): InterfaceMensageiro {
        switch ($mensagem) {
            case 'email':
                return new Email();
            case 'sms':
                return new SMS();
            case 'whatsapp':
                return new Whatsapp();
            default:
                throw new \Exception('Mensagem inválida...');
        }
    }
}