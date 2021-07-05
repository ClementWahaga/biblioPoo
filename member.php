<?php
class member  {

    private $_id;
    private $_lastName ;
    private $_firstName;
    private $_NblivreEmprunte;
   


    public function __construct($name,$fname,$nblivreEmprunte )
    {
        $this->setName($name);
        $this->setFname($fname);
        $this->setnblivreEmprunte($nblivreEmprunte);
        
    }

    // stter------------------------------------------------------------>
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

    public function setName($name) {
        if (!is_string($name)) { // S'il ne s'agit pas d'une chaine de caractere.
            trigger_error('Le name du personnage doit être chaine de caractere ', E_USER_WARNING);
            return;
        }

        $this->_lastName = $name;
    }

    public function setFname($fname) {
        if (!is_string($fname)) { // S'il ne s'agit pas d'une chaine de caractere.
            trigger_error('Le name du personnage doit être chaine de caractere ', E_USER_WARNING);
            return;
        }

        $this->_firstName = $fname;
    }

    public function setnblivreEmprunte($nblivreEmprunte) {
        if (!is_int($nblivreEmprunte)) { // S'il ne s'agit pas d'un nombre entier.
            trigger_error('les livre emrpreinté doivent  doit être un nombre entier', E_USER_WARNING);
            return;
        }

        if ($nblivreEmprunte > 100) { // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
            trigger_error('les livre emrpreinté doivent  ne peut dépasser 100', E_USER_WARNING);
            return;
        }

        $this->_nblivreEmprunte = $nblivreEmprunte;
    }

    //getter----------------------------------------------------------------->
    public function id()
    {
        return $this -> _id ;
    }

    public function lastName()
    {
        return $this -> _lastName ;
    }

    public function firstName()
    {
        return $this -> _firstName ;
    }

    public function nblivreEmprunte()
    {
        return $this -> _nblivreEmprunte ;
    }














}