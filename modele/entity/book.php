<?php
class book  {

    private $_id;
    private $_titre ;
    private $_auteur;
    private $_disponible;
    private $_idRayon;
   
    

    public function __construct($titre,$auteur,$disponible,$idRayon )
    {
        $this->setTitre($titre);
        $this->setAuteur($auteur);
        $this->setdisponible($disponible);
        $this->setidRayon($idRayon);
    }

    // setter------------------------------------------------------------>
    public function setId($id) {
        if (!is_int($id)) { // S'il ne s'agit pas d'un nombre entier.
            trigger_error('id du personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if ($id >= 00)
        { //On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
            trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_id = $id;
    }

    public function setTitre($titre) {
        if (!is_string($titre)) { // S'il ne s'agit pas d'une chaine de caractere.
            trigger_error('Le titre du personnage doit être chaine de caractere ', E_USER_WARNING);
            return;
        }

        $this->_titre = $titre;
    }

    public function setAuteur($auteur) {
        if (!is_string($auteur)) { // S'il ne s'agit pas d'une chaine de caractere.
            trigger_error('Le name du personnage doit être chaine de caractere ', E_USER_WARNING);
            return;
        }

        $this->_auteur = $auteur;
    }

    public function setdisponible($disponible) {
        if (!is_bool($disponible)) { // S'il ne s'agit pas d'un booleen
            trigger_error('les livre emrpreinté doivent  doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($disponible = 0) { // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 5.
            trigger_error('les livre emrpreinté doivent  ne peut dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_disponible = $disponible;
    }


    public function setidRayon($idRayon){

        if (!is_int($idRayon)) { // S'il ne s'agit pas d'un nombre entier.
            trigger_error('idR$idRayon du personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if ($idRayon >= 00)
        { //On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
            trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_idRayon = $idRayon;


    }

    //getter----------------------------------------------------------------->
    public function id()
    {
        return $this -> _id ;
    }

    public function titre()
    {
        return $this -> _titre ;
    }

    public function auteur()
    {
        return $this -> _auteur ;
    }

    public function disponible()
    {
        return $this -> _disponible ;
    }

    public function idRayon()
    {
        return $this -> _idRayon ;
    }













}