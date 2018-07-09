<?php

session_start();
include_once "Postavke.php";
include_once "funkcije.php";
$idAPP="OdrzavanjeVer1";
$nazivAPP="Održavanje";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Odrzavanje1.3PDO/";
    $bojaIzbornika="";
    break;
    case "nikolasaric.byethost.com":
    $putanjaAPP="/Odrzavanje1.3PDO/";
    //$bojaIzbornika="";
    break;
}




