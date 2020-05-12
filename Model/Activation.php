<?php 
      require_once 'model.php';

      class Activation extends Modele
      {
        public  function setEtat($cne,$etat)
        {
           if($etat==0)
           {
               $req='UPDATE `eleves` SET `ETAT` = 1 WHERE `CNE` = :CNE';
               $tab=array(':CNE'=> $cne);
               $this->execute($req,$tab);
           }
          if($etat==1)
           {
            $req='UPDATE `eleves` SET `ETAT` = 0 WHERE `CNE` = :CNE';
            $tab=array(':CNE'=> $cne);
            $this->execute($req,$tab);
           }
        }
      }