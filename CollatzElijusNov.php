<?php

include_once "collatz3xplius1.php";

$obj=new collatz3xplius1();

//paprastas 1 skaiciaus collatz
$sk = 99;
$obj-> skaiciuokcollatz($sk);
//$obj-> get_ats();

//intervalo collatz su statistika
$p = 129;
$g = 45487;
$obj-> set_pradzia($p);
$obj-> set_galas($g);
$obj-> intervalocollatz();
$obj-> rodykstatistika();

?>
