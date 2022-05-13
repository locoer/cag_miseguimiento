<?php
//Define valores de la Base de Datos
define ("HOST","NOMBRE HOST");
define ("DBNAME","NOMBRE BASE DE DATOS");
define ("USR","USUARIO BDs");
define ("PSSWD","PSSWD BDs");
define ("PUERTO","PUERTO BDs");

//Define valores del sitio
define ("NOMBRE_SITIO", "NOMBRE DEL SITIO WEB");
define ("DOMINIO","URL del Siio WEB");

//Establece valores de localización del script
//setlocale(LC_MONETARY,"es_MX");
//setlocale(LC_TIME,"es_MX"); 
setlocale(LC_ALL, 'es_MX');
date_default_timezone_set('UTC');
date_default_timezone_set("America/Mexico_City");
header('Content-Type: text/html; charset=utf-8' );
?>