<?php
class memberManager {
    /*
     * Attributs
     */
    private $_db;
    
    public function __construct($db) {
        $this->setDb($db);
    }
    /*
     * Méthode de construction
     */
    
    
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    /*
     * Methodes CRUD
     */
     
    /*  Methode d'insertion d'un personnage dans la BDD
     *  Pour éviter le message d'erreur Strict Standards: Only variables should be passed by reference
     *  il faut utiliser bindValue et non bind Param
     */
    public function addMember(member $member) {
        $req = $this->_db->prepare('INSERT INTO abonnes
                                             SET lastName            = ?,
                                                 firstName           = ?,
                                                 nblivreEmprunte     = ?');
        
        $req->bindValue('?',         $member->lastName(),           PDO::PARAM_STR);
        $req->bindValue('?',         $member->firstName(),          PDO::PARAM_INT);
        $req->bindValue('?',         $member->nblivreEmprunte(),    PDO::PARAM_INT);
        $req->execute();
        $req->closeCursor();
    }


    public function deletePersonnage(member $member) {
        $this->_db->exec('DELETE FROM  abonnes WHERE id = ' .$member->id());
    }
    
    //Methode de selection d'un personnage avec clause WHERE
    public function getMember($id) {
        $id = (int) $id;
        
        $req = $this->_db->query('SELECT id, lastName,firstName,nblivreEmprunte 
                                    FROM abonnes
                                   WHERE id = '. $id);
        $data = $req->fetch(PDO::FETCH_ASSOC);
        //var_dump($datas);
        return new member($data);
        
        $req->closeCursor();
    }   
    
    // Methode de selection de toute la liste des personnages
    public function getListMember() {
        $members= [];
        
        $req = $this->_db->query('SELECT id, lastName,firstName,nblivreEmprunte 
                                    FROM member
                                   ORDER BY lastName');
        
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $members[] = new member($data);
        }
        //var_dump($persos);
        return $members;
        
        $req->closeCursor();
    }
    
    // Methode de mise à jour d'un personnage dans la BDD
    public function updateMember(member $member) {
        $req = $this->_db->prepare('UPDATE member
                                        SET lastName        = ?,
                                            firstName       = ?,
                                            nblivreEmprunte = ?
                                        WHERE id         = :id');
        
        $req->bindValue('?',      $member->lastName(),             PDO::PARAM_INT);
        $req->bindValue('?',      $member->firstName(),            PDO::PARAM_INT);
        $req->bindValue('?',       $member->nblivreEmprunte(),     PDO::PARAM_INT);
        $req->execute();
        $req->closeCursor();
    }




}

