<?php $this->titre='Gestion des absences' ?> 
<table border="1px Black Solid Collapse">
<tr> 
    <td><?php echo $elev["CNE"]; ?></td> 
    <td><?php echo $elev["NOM"]; ?></td> 
    <td><?php echo $elev["Prenom"]; ?></td> 
  </tr> 
</table>
<table id="hor-minimalist-a"> 
  <tr> 
    <td>Matière</td> 
    <td>Nombre d'absence</td> 
    <td>+1</td> 
  </tr> 
<?php 
foreach ($absence as $abs) { 
  $et=""; 
  $lien="";  
    $et="Ajouter"; 
    $lien="index.php?action=absence&CNE=".$abs["CNE"]."&id_matiere=".$abs['id_matiere']; 
  
  ?> 
    <tr> 
    <td><?php echo $abs["nom_matiere"]; ?></td> 
    <td><?php echo $abs["nbre_absence"]; ?></td> 
    <td><a href="<?php echo $lien; ?>"><?php echo $et; ?></a></td> 
  </tr> 
  <?php  
} 
  ?> 
</table>   
<a href="index.php">Continuer</a>