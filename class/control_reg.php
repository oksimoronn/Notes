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
        
        $stmt = $pdo->prepare("INSERT INTO users (user, pass) VALUES (?, ?)");
        $stmt->execute([$this->un, $this->ps]);
        
        $stmt = null;

        header("location:C:/ph/htdocs/doktor/class/resolut.php");

    }

}