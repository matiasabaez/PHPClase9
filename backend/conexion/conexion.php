<?php

$datosConexion = parse_ini_file(DOCUMENT_ROOT . '/matiasbaez/clase9/backend/config/bdConfig.ini');

$conn = new PDO("mysql:host=" . $datosConexion['server'] . ";dbname=" . $datosConexion['base'].";charset=utf8mb4", $datosConexion['user'],$datosConexion['clave']);