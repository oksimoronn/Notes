<?php

session_start();  
unset($_SESSION['sess_user']);  
session_destroy();  
?>
<a href="login.php"><h1>Izasao si!! moras se ulogirati</h1></a>
<?php
//header("Location:C:/ph/htdocs/doktor/resolut.php");