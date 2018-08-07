<?php include_once "../../konfiguracija.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "odjava.php");
}

if(!isset($_GET["sifra"]) && !isset($_POST["sifra"])){
  header("location: " . $putanjaAPP . "odjava.php");
}



if(isset($_POST["promjeni"])){
  $izraz = $veza->prepare("update kvar set naziv=:naziv,
                          opis=:opis,kategorija=:kategorija,datum=:oib
                          where sifra=:sifra;");
  unset($_POST["promjeni"]);
  $izraz->execute($_POST);
  header("location: index.php");
}else{
  $izraz = $veza->prepare("select * from kvar where sifra=:sifra");
  $izraz->execute($_GET);
  $o=$izraz->fetch(PDO::FETCH_OBJ);
}


?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../../predlozak/head.php" ?>
  </head>
  <body>
    <div class="grid-container">
      
    <?php include_once "../../predlozak/zaglavlje.php" ?>

    <?php include_once "../../predlozak/izbornik.php" ?>
    <form class="callout text-center" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
          
    <div class="floated-label-wrapper">
            <label for="naziv">Naziv</label>
            <input autocomplete="off" type="text" id="naziv" name="naziv">
          </div>
          <div class="floated-label-wrapper">
            <label for="opis">Opis</label>
            <input autocomplete="off" type="text" id="opis" name="opis" >
          </div>
          <div class="floated-label-wrapper">
            <label for="kategorija">Kategorija</label>
            <input autocomplete="off" type="text" id="kategorija" name="kategorija" >
          </div>
          <div class="floated-label-wrapper">
            <label for="datum">Datum</label>
            <input autocomplete="off" type="date" id="datum" name="datum">
        </form>

        <input type="hidden" name="sifra" value="<?php echo $o->sifra ?>" />
          <input class="button expanded" type="submit" name="promjeni" value="Promjeni">
        </form>

    <?php include_once "../../predlozak/podnozje.php" ?>

    <?php include_once "../../predlozak/skripte.php" ?>
  </body>
</html>
