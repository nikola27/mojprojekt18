<?php
if(!isset($_POST["korisnik"])){
exit;
}

    if($_POST["korisnik"]===""){
        header("location: prijava.php?poruka=2");
        exit;
    }

    if(($_POST["korisnik"]==="nsaric" && $_POST["lozinka"]==="n")
    ||
    ($_POST["korisnik"]==="odrzavanje" && $_POST["lozinka"]==="od")
    ){
        //pusti dalje
      session_start();
        $_SESSION["o"]= $_POST["korisnik"];
        header("location: privatno/nadzornaPloca.php");
    }else{
        header("location: prijava.php?poruka=1");
    }
