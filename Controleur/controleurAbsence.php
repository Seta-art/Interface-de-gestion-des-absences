<?php
require_once __DIR__.'/../Model/Absence.php';
require_once __DIR__.'/../Model/Eleve.php';
require_once __DIR__.'/../View/view.php';

class controleurAbsence
{
    private $absence;
    private $eleve;
    public function __construct() {
        $this->absence = new Absence();
        $this->eleve= new Eleve();
      }

    public function affichage($cne)
    {
        $absence = $this->absence->getAbsence($cne);
        $elev=$this->eleve->getoneEleves($cne);
        $vue = new Vue("Absence");
        $vue->generer(array('absence' => $absence,'elev'=>$elev));
    }

    public function ajoutAbsence($cne,$id)
    {
        $absence = $this->absence->setAbsence($cne,$id);
       //$this->affichage($cne);
    }

}