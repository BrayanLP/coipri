<?php

//$modo => 0: local		1: develoweb		2: cliente
$proyecto = 'coipri';
$modo = 3;

$datos[0]['url'] = "http://192.168.1.112/estibens/$proyecto/";
$datos[0]['host'] = $_SERVER['DOCUMENT_ROOT'] . "/estibens/$proyecto/";
$datos[0]['server'] = "localhost";
$datos[0]['name'] = "$proyecto";
$datos[0]['user'] = "root";
$datos[0]['password'] = "123456";

$datos[1]['url'] = "http://www.develoweb.pe/$proyecto/";
$datos[1]['host'] = $_SERVER['DOCUMENT_ROOT'] . "/$proyecto/";
$datos[1]['server'] = "localhost";
$datos[1]['name'] = "develowe_" . $proyecto;
$datos[1]['user'] = "develowe_" . $proyecto;
$datos[1]['password'] = "iM)7S,HpE,uX";

$datos[2]['url'] = "http://localhost/$proyecto/";
$datos[2]['host'] = $_SERVER['DOCUMENT_ROOT'] . "/$proyecto/";
$datos[2]['server'] = "localhost";
$datos[2]['name'] = "$proyecto";
$datos[2]['user'] = "root";
$datos[2]['password'] = "";

$datos[3]['url'] = "http://coipri.pe/";
$datos[3]['host'] = $_SERVER['DOCUMENT_ROOT'] . "/";
$datos[3]['server'] = "localhost";
$datos[3]['name'] = "co1ipri_base";
$datos[3]['user'] = "co1ipri_user";
$datos[3]['password'] = "d6uT]glgs{~2";

$datos[4]['url'] = "http://www.coipri.com/";
$datos[4]['host'] = $_SERVER['DOCUMENT_ROOT'] . "/";
$datos[4]['server'] = "localhost";
$datos[4]['name'] = $proyecto;
$datos[4]['user'] = "root";
$datos[4]['password'] = "root";

$_config['server']['url'] = $datos[$modo]['url'];
$_config['server']['host'] = $datos[$modo]['host'];
$_config['bd']['server'] = $datos[$modo]['server'];
$_config['bd']['name'] = $datos[$modo]['name'];
$_config['bd']['user'] = $datos[$modo]['user'];
$_config['bd']['password'] = $datos[$modo]['password'];
?>