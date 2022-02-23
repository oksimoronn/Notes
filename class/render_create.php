<?php
require "control_create.php";

if(isset($_POST)){
    $nam = $_POST['nam'];
    $lnam = $_POST['lnam'];
    $oib = $_POST['oib'];
    $dob = $_POST['dob'];
    $dij = $_POST['dij'];

    $create = new Create($nam, $lnam, $oib, $dob, $dij);

    $create -> newCreate();
    
}

header("location:../home_page.php");