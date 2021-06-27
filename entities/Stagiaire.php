<?php
require_once __DIR__."/Utilisateur.php";

class Stagiaire extends Utilisateur
{
    protected $etablissement;
    protected $niveauEducation;

    public function __construct(array $options = array())
    {
        if(key_exists("matricule",$options))
            $this->matricule = $options["matricule"];
        if(key_exists("nom",$options))
            $this->nom = $options["nom"];
        if(key_exists("prenom",$options))
            $this->prenom = $options["prenom"];
        if(key_exists("dateDeNaissance",$options))
            $this->dateDeNaissance = $options["dateDeNaissance"];
        if(key_exists("email",$options))
            $this->email = $options["email"];
        if(key_exists("numeroTelephone",$options))
            $this->numeroTelephone = $options["numeroTelephone"];
        if(key_exists("etablissement",$options))
            $this->etablissement = $options["etablissement"];
        if(key_exists("niveauEducation",$options))
            $this->niveauEducation = $options["niveauEducation"];
    }

    /**
     * @return mixed
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * @param mixed $etablissement
     */
    public function setEtablissement($etablissement): void
    {
        $this->etablissement = $etablissement;
    }

    /**
     * @return mixed
     */
    public function getNiveauEducation()
    {
        return $this->niveauEducation;
    }

    /**
     * @param mixed $niveauEducation
     */
    public function setNiveauEducation($niveauEducation): void
    {
        $this->niveauEducation = $niveauEducation;
    }
}