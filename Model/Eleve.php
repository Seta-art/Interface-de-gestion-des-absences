<?php 
      require_once 'model.php';

      class Eleve extends Modele
      {
        public function getEleves()
        {
          
          $req='select NOM,Prenom,CNE,ETAT from eleves' ;
          $eleves=$this->execute($req);
         return $eleves;
  
        }

        public function getoneEleves($cne)
        {
          
          $req='select NOM,Prenom,CNE,ETAT from eleves where CNE=:CNE' ;
          $tab=array(':CNE'=>$cne);
          $eleves=$this->execute($req,$tab);
          $eleves=$eleves->fetch();
         return $eleves;
  
        }
      }