<?php
session_start();


class Login{
    public  $un;
    public  $ps;

    function __construct($un, $ps){
        $this->un = $un;
        $this->ps = $ps;
    }

    function redirect(){
        if($this->userExists() == false){
            header("location:..//index.php");
        }else{header("location:..//resolut.php");}
    }

    function userExists(){
        require_once "../db/db.php";

        $stmt1 ="SELECT user, pass FROM users WHERE user = '{$this->un}' AND pass ='{$this->ps}'";
        $query = $pdo->prepare($stmt1);
        $query->execute();
        
        $nrows = $query-> rowCount();
        
        if($nrows != 0){
           // echo 'valja', $nrows;
            $res = $query->fetch(PDO::FETCH_ASSOC);

            foreach($res as $ress) {  
                    $dbname = $res['user'];
                    $dbpass = $res['pass'];
                }
            if($dbname ==$this->un  && $dbpass==$this->ps){
               //echo 'korisnik postoji';
               //session_start();  
               $_SESSION['sess_user']=$this->un;    
               header("Location: ../home_page.php");

               
            } 
        }else{echo 'User not found';}
        exit;
        

     
        
        
        $stmt = null;
    }
}