<?php   
session_start();
if(!isset($_SESSION["sess_user"])){  
    ?>
    <a href="resolut.php"><h1>Moras se ulogirati</h1></a>
    <?php
     
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Create new pacijenti</h1>
    </div>
    <div>
        <form action="./class/render_create.php" method="post">
            <input type="text" name="nam" placeholder="Ime">
            <input type="text" name="lnam" placeholder="Prezime">
            <input type="text" name="oib" placeholder="OIB">
            <input type="text" name="dob" placeholder="Datum rođenja">
            <input type="text" name="dij" placeholder="Dijagnoza">
            <input type="submit" name="submit">
        </form>
    </div>
    
</body>
</html>

<?php  
}  
?> 