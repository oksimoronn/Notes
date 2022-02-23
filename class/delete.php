<?php

if(isset($_GET['id'])){
    include "C:\ph\htdocs\doktor\db\db.php";

    $oi = $_GET['id'];

    $stmt1 ="DELETE FROM pacijenti WHERE OIB = ('$oi')";
    $query = $pdo->prepare($stmt1);
    $query->execute();
    
}
header("location:../home_page.php");