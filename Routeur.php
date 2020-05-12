<?php
foreach (glob("Controleur/*.php") as $filename)
{
    require_once $filename;
}
require_once __DIR__.'/View/View.php';
class Routeur {
  private $ctrlAccueil;
  private $ctrlActivation;
  private $ctrlAbsence;
  public function __construct() {
    $this->ctrlAccueil = new ControleurAcceuil();
    $this->ctrlActivation = new ControleurActivation();
    $this->ctrlAbsence = new controleurAbsence();
  }
  public function routerRequete()
  {
    try {
      if (isset($_GET['action'])) {
        if ($_GET['action'] == 'activation') {
          if (isset($_GET['CNE']) && isset($_GET['ETAT'])) {
             $this->ctrlActivation->activation($_GET['CNE'],$_GET['ETAT']);
          }
          else
            throw new Exception("Données Manquantes");
        }
        else if($_GET['action']=='absence')
        {
          if(isset($_GET['id_matiere']) && isset($_GET['CNE']))
          {
             $this->ctrlAbsence->ajoutAbsence($_GET['CNE'],$_GET['id_matiere']);
          }
          if(isset($_GET['CNE']))
          {
            $this->ctrlAbsence->affichage($_GET['CNE']);
          }
        }
        else
          throw new Exception("Action non valide");
      }
      else {
          $this->ctrlAccueil->accueil();     //Quand aucune action n'est défini, on affiche l'acceuil par défaut
      }
    }
    catch (Exception $e) {
       $this->erreur($e->getMessage());
    }
  }

  private function erreur($msgErreur) {
    $vue = new Vue("Erreur");
    $vue->generer(array('msgErreur' => $msgErreur));
    //$vue->generer($msgErreur);
  }



}