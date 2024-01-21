<?php
header("Access-Control-Allow-Origin: *"); // Permitir solicitudes desde cualquier origen

// Realizar la solicitud al servidor remoto
$remoteUrl = 'http://192.168.1.71/data';
$response = file_get_contents($remoteUrl);

// Enviar la respuesta al cliente
header('Content-Type: application/json');
echo $response;
?>
