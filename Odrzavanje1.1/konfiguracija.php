<?php

session_start();
include_once "funkcije.php";

$nazivAPP="Održavanje";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Odrzavanje1.1/";
    $bojaIzbornika="";
    break;
    case "nikolasaric.byethost13.com":
    $putanjaAPP="/Odrzavanje1.1/";
    $bojaIzbornika="";
    break;
}




