<?php
require_once "controladores/ctrlprincipal.php";
require_once "controladores/ctrlusuarios.php";
require_once "controladores/ctrlClientes.php";

require_once "modelos/mdlusuarios.php";
require_once "modelos/mdlClientes.php";

$objPrincipal = new principal();
$objPrincipal->ctrlPrincipal();