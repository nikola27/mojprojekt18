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

<a href="novi.php" class="success button expanded">Dodaj korisnika</a>
  <?php

$izraz = $veza->prepare("
select a.sifra,a.ime,a.prezime,
a.lozinka, a.oib,  a.telefon,  a.adresa, a.email, 
count(b.korisnik) as korisnika
from korisnik a left join korisnikkvar b
on a.sifra = b.korisnik
group by a.sifra,a.ime,a.prezime,
a.lozinka, a.oib,  a.telefon,  a.adresa, a.email;

");
$izraz->execute();
$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
?>
 <table>
   <thead>
   <tr>
   <th>Ime</th>
   <th>Prezime</th>
   <th>Lozinka</th>
   <th>OIB</th>
   <th>Telefon</th>
   <th>Adresa</th>
   <th>Email</th>
   <th>Akcija</th>
   </tr>
   </thead>
   <tbody>
   <?php foreach($rezultati as $red):?>
     <tr>
     <td><?php echo $red->ime; ?></td>
     <td><?php echo $red->prezime; ?></td>
     <td><?php echo $red->lozinka; ?></td>
     <td><?php echo $red->oib; ?></td>
     <td><?php echo $red->telefon; ?></td>
     <td><?php echo $red->adresa; ?></td>
     <td><?php echo $red->email; ?></td>
     <a href="promjena.php?sifra=<?php echo $red->sifra; ?>">
     <i class="fas fa-edit fa"></i> 
     </a>
     <?php if($red->korisnika==0): ?>
      <a onclick="return confirm('Sigurno obrisati <?php echo $red->ime ?>')" href="obrisi.php?sifra=<?php echo $red->sifra; ?>">
      <i class="fas fa-trash fa " style="color: red;"></i>
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