<?php
require_once __DIR__.'/../Model/Eleve.php';
require_once __DIR__.'/../View/view.php';

class ControleurAcceuil
{
    private $eleve;

    public function __construct() {
        $this->eleve = new Eleve();
      }
      // Affiche la liste de tous les billets du blog
      public function accueil() {
        $eleves = $this->eleve->getEleves();
        $vue = new Vue("Acceuil");
        $vue->generer(array('eleves' => $eleves));
      }
}