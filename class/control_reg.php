<?php


class App{
    public  $un;
    public  $ps;

    function __construct($un, $ps){
        $this->un = $un;
        $this->ps = $ps;
    }

     function newUser(){
        require_once "../db/db.php";
        
        $stmt ="INSERT INTO users (user, pass) VALUES ('{$this->un}', '{$this->ps}')";
        $query = $pdo->prepare($stmt);
        $query->execute();
       // $stmt = null;

        header("location:C:/ph/htdocs/doktor/class/resolut.php");

    }

}