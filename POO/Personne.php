<?php

class Personne
{
    public $nom;
    public $prenom;
    public $dateDeNaissance;
    public $adresse;

    public function __construct($nom, $prenom, $dateDeNaissance, $adresse)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->dateDeNaissance = $dateDeNaissance;
    }

    public function modification($adresse)
    {
        $this->adresse = $adresse;
    }

    public function affichage()
    {
        return "Je m'appelle " . $this->prenom . " " . $this->nom . ". Il habite " . $this->adresse . " . Il est né le " . $this->dateDeNaissance . ".";
    }

    public function age() {
        $now = new DateTime('now');
        $dateDeNaissance = new DateTime($this->dateDeNaissance);
        $age = $now->diff($dateDeNaissance);
        return "<br/> J'ai " . $age->format('%y') . " ans.";
    }

}

$personne1 = new Personne();
$personne1->nom = 'bob';
$personne1->prenom = 'truc';
$personne1->dateDeNaissance = '02-07-1979';
$personne1->adresse = 'rue bidon';

echo $personne1->affichage();
echo $personne1->age();

?>