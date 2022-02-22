<?php
include "control_reg.php";


if(isset($_POST)){
    $un = $_POST['us'];
    $ps = $_POST['ps'];

    $reg = new App($un, $ps);

    $reg -> newUser();
    
}