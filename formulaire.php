<?php

class Formulaire {
    public function __construct($nomFichier){
        echo "<form>";
    }
    public function ajouterZoneTexte(){
        echo "<input type='text'>";
    }
    public function ajouterBouton(){
        echo "<input type='submit'>";
    }
    public function getForm(){
        $this->ajouterZoneTexte();
        $this->ajouterBouton();
    }
}