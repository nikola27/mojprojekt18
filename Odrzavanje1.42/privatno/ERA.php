
<?php include_once "../konfiguracija.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "odjava.php");
}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once "../predlozak/head.php" ?>
  </head>
  <body>
    <div class="grid-container">
      
    <?php include_once "../predlozak/zaglavlje.php" ?>

    <?php include_once "../predlozak/izbornik.php" ?>


      <h4>ERA dijagram </h4>
      
      <img src="../img/era.jpeg" alt="eradijagram" width="100%" >
    

    <?php include_once "../predlozak/podnozje.php" ?>

    <?php include_once "../predlozak/skripte.php" ?>
  </body>
</html>