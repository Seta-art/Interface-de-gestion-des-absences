<?php
require_once __DIR__.'/../Model/Activation.php';
require_once __DIR__.'/../View/view.php';

class ControleurActivation
{
    private $activation;

    public function __construct() {
        $this->activation = new Activation();
      }
      // Affiche la liste de tous les billets du blog
      public function activation($cne,$etat) {
        $eleves = $this->activation->setEtat($cne,$etat);
        $vue = new Vue("Activation");
        $vue->generer();
      }
}