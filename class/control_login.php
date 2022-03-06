<?php
session_start();


class Login{
    public  $un;
    public  $ps;

    function __construct($un, $ps){
        $this->un = $un;
        $this->ps = $ps;
    }

    function userExists(){
        require_once "../db/db.php";

        $stmt1 =$pdo->prepare("SELECT user, pass FROM users WHERE user = ?");
        $stmt1->execute([$this->un]);
        
        $nrows = $stmt1-> rowCount();
        
        if($nrows != 0){
           
            $res = $stmt1->fetch(PDO::FETCH_ASSOC);
   
            $dbname = $res['user'];
            $dbpass = $res['pass'];
            if(password_verify($this->ps, $dbpass) && $dbname == $this->un){
             
               $_SESSION['sess_user']=$this->un;    
               header("Location: ../home_page.php");

               
            } 
        }else{echo 'User not found';}
        
        
       $stmt = null;
    }
}