<?php

require_once ("Gasolinera.php");

$gaso1 = new Gasolinera ("Alburquerque", "GALP");

$c1 = new Cliente ("Juan", "01234567A");

//Llamando a la funcion anadirRepostajeUno
$repo1 = new Repostaje (50, "2018-02-01");
$c1->anadirRepostajeUno ($repo1);

//Llamando a la funcion anadirRepostajeDos
$c1->anadirRepostajeDos (50, "2016-04-02");

$gaso1->altaCliente($c1);
$cliente1 = new Cliente ("Pedro", "79309747C");
$gaso1->anadircliente ($cliente1);
$cliente2 = new Cliente ("samuel", "08795428B");
$gaso1->anadirCliente ($cliente2);

$gaso1->bajaCliente ("79309747C");
$cliente1-> bajaCliente ($cliente1);
$cliente2-> bajaCliente ($cliente1);

$empleado1 = new Empleado ("Jesus", "08758216M");
$gaso1-> altaEmpleado (empleado1);

$e = new Empleado ("Sandra", 1);
$gaso1->altaEmpleado ($e);

$s1 = new SurtidorGasolina (1.40 , "95");
$s1 = new SurtidorGasolina (1.47 , "95");
$s1 = new SurtidorGasolina (1.40 , "95");
$s2 = new SurtidorGasoil (1.15, false);
$s2 = new SurtidorGasoil (1.15, false);
$s2 = new SurtidorGasoil (1.25, false);

$gaso1->anadirSurtidor ($s1);
$gaso1->anadirSurtidor ($s2);
$gaso1->anadirSurtidor ($s3);
$gaso1->anadirSurtidor ($s4);
$gaso1->anadirSurtidor ($s5);
$gaso1->anadirSurtidor ($s6;)

$gaso1->mostrar();



//Imprimir lo que esta ocurriendo
echo "<pre>";
print_r ($gaso1);
echo "</pre>";