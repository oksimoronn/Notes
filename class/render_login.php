<?php

include "control_login.php";

if(isset($_POST)){
    $un = $_POST['us'];
    $ps = $_POST['ps'];

    $reg = new Login($un, $ps);

    $reg->userExists();
    }
    