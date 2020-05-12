<?php 
      
      class Modele
      {

        private $bdd;

      protected function execute($sql, $params = null) {
        if ($params == null) {
          $resultat = $this->connectDB()->query($sql);    // exécution directe
        }
        else {
          $resultat = $this->connectDB()->prepare($sql);  // requête préparée
          $resultat->execute($params);
        }
        return $resultat;
      }
      private function connectDB()
      {
        if($this->bdd==NULL){
        $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $bdd;
      }
  
      }