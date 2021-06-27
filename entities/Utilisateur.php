<?php



abstract class Utilisateur
{
    protected int $matricule;
    protected $nom;
    protected $prenom;
    protected $dateDeNaissance;
    protected $email;
    protected $numeroTelephone;
    /**
         * @return mixed
         */
        public function getDateDeNaissance()
        {
            return $this->dateDeNaissance;
        }

        /**
         * @param mixed $dateDeNaissance
         */
        public function setDateDeNaissance($dateDeNaissance): void
        {
            $this->dateDeNaissance = $dateDeNaissance;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email): void
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getMatricule()
        {
            return $this->matricule;
        }

        /**
         * @param mixed $matricule
         */
        public function setMatricule($matricule): void
        {
            $this->matricule = $matricule;
        }

        /**
         * @return mixed
         */
        public function getNumeroTelephone()
        {
            return $this->numeroTelephone;
        }

        /**
         * @param mixed $numeroTelephone
         */
        public function setNumeroTelephone($numeroTelephone): void
        {
            $this->numeroTelephone = $numeroTelephone;
        }

        /**
         * @return mixed
         */
        public function getPrenom()
        {
            return $this->prenom;
        }

        /**
         * @param mixed $prenom
         */
        public function setPrenom($prenom): void
        {
            $this->prenom = $prenom;
        }

        /**
         * @return mixed
         */
        public function getNom()
        {
            return $this->nom;
        }

        /**
         * @param mixed $setNom
         */
        public function setNom($setNom): void
        {
            $this->setNom = $setNom;
        }

}