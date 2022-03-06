<?php

class Create{

    public  $nam;
    public  $lnam;
    public  $oib;
    public  $dob;
    public  $dij;

    function __construct($nam, $lnam, $oib, $dob, $dij){
        $this->nam = $nam;
        $this->lnam = $lnam;
        $this->oib = $oib;
        $this->dob = $dob;
        $this->dij = $dij;
    }

     function newCreate(){
        require_once "../db/db.php";
        
        $stmt = $pdo->prepare("INSERT INTO pacijenti (Ime, Prezime, OIB, Dob, Dijagnoza) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$this->nam, $this->lnam, $this->oib, $this->dob, $this->dij]);
        $stmt = null;
    }

}

