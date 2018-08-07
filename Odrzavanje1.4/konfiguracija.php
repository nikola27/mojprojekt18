<?php

session_start();
include_once "Postavke.php";
include_once "funkcije.php";
$idAPP="OdrzavanjeVer1";
$nazivAPP="Održavanje";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Odrzavanje1.4/";
    $bojaIzbornika="";
    break;
   
    case "nikolasaric.byethost.com":
    $putanjaAPP="/";
    //$bojaIzbornika="";
    break;
}


$veza = new PDO("mysql:host=localhost;dbname=mojprimjer1","edunova","edunova");
$veza->exec("set names utf8;");



