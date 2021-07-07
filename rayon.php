<?php
class rayon  {

    private $_id;
    private $_Nom ;
    private $_reference;
    
   
    

    public function __construct($nom,$reference)
    
    {
        $this->setNom($nom);
        $this->setReference($reference);
        
        
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

    public function setNom($nom) {
        if (!is_string($nom)) { // S'il ne s'agit pas d'une chaine de caractere.
            trigger_error('Le nom du personnage doit être chaine de caractere ', E_USER_WARNING);
            return;
        }

        $this->_Nom = $nom;
    }

    public function setReference($reference) {
        if (!is_string($reference)) { // S'il ne s'agit pas d'une chaine de caractere.
            trigger_error('Le name du personnage doit être chaine de caractere ', E_USER_WARNING);
            return;
        }

        $this->_reference = $reference;
    }

    

    //getter----------------------------------------------------------------->
    public function id()
    {
        return $this -> _id ;
    }

    public function Nom()
    {
        return $this -> _Nom ;
    }

    public function reference()
    {
        return $this -> _reference ;
    }

    
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this,$method)){
                $this->$method($value);
            }
        }    




    }













}