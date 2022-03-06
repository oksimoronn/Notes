<?php

if(isset($_GET['id'])){
    include "C:\ph\htdocs\doktor\db\db.php";

    $oi = $_GET['id'];

    $stmt1 =$pdo->prepare("DELETE FROM pacijenti WHERE OIB = ?");
    $stmt1->execute([$oi]);

    $stmt1 = null;
    
}
header("location:../home_page.php");