<?php
error_reporting(E_ALL ^ E_NOTICE);

/*------------Horas y Fechas------------*/
date_default_timezone_set('GMT-5');

include_once("inc.core.php");
require_once(_model_."Conexion.php");
require_once(_model_."Mysql.php"); 
require_once(_model_."Configuration.php"); 

/*-----------------------------------*/
require_once(_model_."Idioma.php");
require_once(_model_."Idiomas.php");
require_once(_model_."Msgbox.php");
require_once(_model_."Usuarios.php");
require_once(_model_."Usuario.php");

/*---------------------------------*/
require_once(_view_."Secciones.php");


require_once(_view_."Noticias.php");
require_once(_view_."Inscritos.php");
require_once(_view_."Busquedas.php");

/*------------------------------------*/
require_once(_util_."Upload.php");
require_once(_util_."class.Fecha.php");
require_once(_util_."Libs.php");
require_once(_util_."tags_html.php");

$link = new Conexion($_config['bd']['server'],$_config['bd']['user'],$_config['bd']['password'],$_config['bd']['name']);		
session_start();	



//idioma
if($_SESSION['idioma']){
	$idioma = $_SESSION['idioma'];
}else{
	$idioma = new Idioma(); 
}

//cuando hay que cambiar idioma
if(isset($_GET['switch'])){$idioma->switchs($_GET['switch']);}
//incluimos el archivo de variables del idioma
define("ID_IDIOMA",$idioma->__get("_id"));

require_once(_language_.$idioma->__get("_archivo"));


//msgbox
if(!(isset($_SESSION['msg']))){
	$msgbox = new Msgbox();
}else{
	$msgbox = $_SESSION['msg'];
}

//configuracion del sitio
$user = new Usuario();
$config_site = new Configuration($msgbox,$user);
$configs = $config_site->getData();

foreach($configs as $clave=>$valor){
	define($clave,$valor);
}
?>