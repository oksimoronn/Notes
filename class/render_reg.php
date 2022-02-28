<?php
include "control_reg.php";


if(isset($_POST)){
    $un = $_POST['us'];
    $ps = $_POST['ps'];

    $hps = password_hash($ps, PASSWORD_DEFAULT);

    $reg = new App($un, $hps);

    $reg -> newUser();
    
}

