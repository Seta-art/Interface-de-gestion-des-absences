<?php 
      require_once 'model.php';

      class Absence extends Modele
      {
         public function getAbsence($cne)
         {
            $req='select * from Absences where CNE=:CNE' ;
            $absence=$this->execute($req,array(':CNE'=>$cne));
           return $absence;
         }
         public function setAbsence($cne,$idmatiere)
         {
             $req='UPDATE Absences SET nbre_absence=nbre_absence+1 where CNE=:CNE and id_matiere=:id';
             $donne=array(':CNE'=>$cne,':id'=>$idmatiere);
             $this->execute($req,$donne);
         }
      }