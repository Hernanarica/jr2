<?php
require_once __DIR__ . '/../clases/Validation/Validator.php';

header('Content-Type: application/json; charset=UTF-8');
//header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Origin: http://localhost:8080'); // Declaramos el origen (URL) desde el cual permitimos peticiones.
header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
// Agregamos el header que indica que permitimos el uso de credenciales.
header('Access-Control-Allow-Credentials: true');

$db = mysqli_connect('localhost', 'root', '', 'cwm_2020_2_n');
mysqli_set_charset($db, 'utf8mb4');
