<?php
require_once __DIR__."/Utilisateur.php";

class Personnel extends Utilisateur
{
    protected boolean $disponible;
    protected array $formations;

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
        if(key_exists("disponible",$options))
            $this->disponible = $options["disponible"];
    }


    /**
     * @return bool|mixed
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * @param bool|mixed $disponible
     */
    public function setDisponible($disponible): void
    {
        $this->disponible = $disponible;
    }

    public function getFormations(){
        return $this->formations;
    }

    public function addFormation(Formation $formation){
        array_push($this->formations,$formation);
    }

}