<?php

$nazivAPP="Odrzavanje1";

switch($_SERVER["HTTP_HOST"]){
    case "localhost":
    $putanjaAPP="/Odrzavanje/";
    $bojaIzbornika="style=\"background-color: blue;\"";
    break;
    case "edunovanastava.byethost33.com"://ovo mjenjati
    $putanjaAPP="/PHP EDUNOVA/";//ovo jenjati
    $bojaIzbornika="";
    break;
}



