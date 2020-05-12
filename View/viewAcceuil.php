<?php $this->titre='Liste des élèves' ?> 
<table id="hor-minimalist-a"> 
  <tr> 
    <td>CNE</td> 
    <td>Nom</td> 
    <td>Prénom</td> 
    <td>Etat</td> 
  </tr> 
<?php 
foreach ($eleves as $eleve) { 
  $et=""; 
  $lien=""; 
  if($eleve["ETAT"]) 
  { 
    $et="desactiver"; 
    $lien="index.php?action=activation&CNE=".$eleve["CNE"]."&ETAT=1"; 
  } 
  else 
  { 
    $et="activer"; 
    $lien="index.php?action=activation&CNE=".$eleve["CNE"]."&ETAT=0"; 
  } 
  $lien_absence="index.php?action=absence&CNE=".$eleve["CNE"]; 
  ?> 
    <tr> 
    <td><?php echo $eleve["CNE"]; ?></td> 
    <td><?php echo $eleve["NOM"]; ?></td> 
    <td><?php echo $eleve["Prenom"]; ?></td> 
    <td><a href="<?php echo $lien; ?>"><?php echo $et; ?></a></td> 
    <td><a href="<?php echo $lien_absence; ?>">Absence</a></td> 
  </tr> 
  <?php  
} 
  ?> 
</table>   