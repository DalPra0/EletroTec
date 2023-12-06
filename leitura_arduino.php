<?php
require 'vendor/autoload.php'; // Inclua a biblioteca php-serial

$serial = new PhpSerial;
$serial->deviceSet('COM10'); // Defina a porta serial do Arduino
$serial->confBaudRate(9600); // Configure a taxa de baud do Arduino (ajuste conforme necessário)

$serial->deviceOpen(); // Abra a porta serial

$Reais = '';
$Watts = '';

// Leia os valores do Arduino
while (true) {
    $data = $serial->readPort();
    $values = explode(',', $data);

    if (count($values) === 2) {
        list($Reais, $Watts) = $values;
    }

    // Apenas para evitar que o loop seja muito rápido
    usleep(500000); // Aguarde meio segundo
}

$serial->deviceClose(); // Feche a porta serial