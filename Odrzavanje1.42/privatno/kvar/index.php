<?php include_once "../../konfiguracija.php" ;
if(!isset($_SESSION[$idAPP."o"])){
  header("location: " . $putanjaAPP . "odjava.php");
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

<a href="novi.php" class="success button expanded">Dodaj kvar</a>
  <?php

 $izraz = $veza->prepare("
 
 select a.sifra, a.naziv, a.opis, a.kategorija, a.datum,
count(b.sifra) as kvarovi
from kvar a left join kategorija b
on a.kategorija = b.sifra
group by a.sifra, a.naziv, a.opis, a.kategorija, a.datum
 
 ");
 $izraz->execute();
 $rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
 ?>
  <table>
    <thead>
    <tr>
    <th>Naziv</th>
    <th>Opis</th>
    <th>Kategorija</th>
    <th>Datum</th>
    <th>Akcija</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($rezultati as $red):?>
      <tr>
      <td><?php echo $red->naziv; ?></td>
      <td><?php echo $red->opis; ?></td>
      <td><?php echo $red->kategorija; ?></td>
      <td><?php echo $red->datum; ?></td>
      <td>
      <a href="promjena.php?sifra=<?php echo $red->sifra; ?>">
      <i class="fas fa-edit fa"></i> 
      </a>
      <?php if($red->kvarovi==0): ?>
      <a onclick="return confirm('Sigurno obrisati <?php echo $red->naziv ?>')" href="obrisi.php?sifra=<?php echo $red->sifra; ?>">
      <i class="fas fa-trash fa" style="color: red;"></i>
      </a>
      <?php endif;?>
      </td>
      </tr>
    <?php endforeach;?>
    </tbody>
    </table>

    <?php include_once "../../predlozak/podnozje.php" ?>

    <?php include_once "../../predlozak/skripte.php" ?>
  </body>
</html>
