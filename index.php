<?php
include_once('class/Csesiones.php');
Csesiones::verificar_sesion();

$menu = "vistas/v-menu.php";

include("plantillas/plantilla-2.php");


