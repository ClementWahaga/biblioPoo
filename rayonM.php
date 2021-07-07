<?php
class rayonManager {
    /*
     * Attributs
     */
    private $_dbh;
    
    public function __construct($dbh) {
        $this->setDb($dbh);
    }
    /*
     * Méthode de construction
     */
    
    
    public function setDb(PDO $dbh) {
        $this->_db = $dbh;
    }
    /*
     * Methodes CRUD
     */
     
    /*  Methode d'insertion d'un personnage dans la BDD
     *  Pour éviter le message d'erreur Strict Standards: Only variables should be passed by reference
     *  il faut utiliser bindValue et non bind Param
     */
    public function addRayon(rayon $rayon) {
        $req = $this->_dbh->prepare('INSERT INTO rayon
                                             SET nom       = ?,
                                                 reference = ?');
        
        $req->bindValue(':nom',        $rayon->Nom(),           PDO::PARAM_STR);
        $req->bindValue(':reference', $rayon->reference(),    PDO::PARAM_INT);
        
        $req->execute();
        
        $req->closeCursor();
    }


    public function deletePersonnage(rayon $rayon) {
        $this->_dbh->exec('DELETE FROM rayon WHERE id = ' . $rayon->id());
    }
    
    //Methode de selection d'un personnage avec clause WHERE
    public function getPersonnage($id) {
        $id = (int) $id;
        
        $req = $this->_dbh->query('SELECT id, nom, reference
                                    FROM rayon
                                   WHERE id = '. $id);
        $data = $req->fetch(PDO::FETCH_ASSOC);
        //var_dump($datas);
        return new rayon($data);
        
        $req->closeCursor();
    }   
    
    // Methode de selection de toute la liste des personnages
    public function getListPersonnages() {
        $persos = [];
        
        $req = $this->_dbh->query('SELECT id, nom, reference
                                    FROM rayon
                                   ORDER BY nom');
        
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $persos[] = new rayon($data);
        }
        //var_dump($persos);
        return $persos;
        
        $req->closeCursor();
    }
    
    // Methode de mise à jour d'un personnage dans la BDD
    public function updatePersonnage(rayon $rayon) {
        $req = $this->_dbh->prepare('UPDATE rayon
                                        SET nom       = ?,
                                            reference = ?
                                      WHERE id         = :id
                                    ');
        
        $req->bindValue(':nom',            $rayon->nom(),               PDO::PARAM_INT);
        $req->bindValue(':reference',      $rayon->reference(),        PDO::PARAM_INT);
        $req->execute();
        $req->closeCursor();
    }




}

