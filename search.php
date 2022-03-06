<?php   
session_start();
if(!isset($_SESSION["sess_user"])){  
    ?>
    <a href="login.php"><h1>Moras se ulogirati</h1></a>
    <?php
     
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>


<a href="home_page.php">Home</a>
<a href="logout.php">Logout</a>



<table>
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>OIB</th>
        <th>Datum Rođenja</th>
        <th>Dijagnoza</th>
        <th>Action</th>
    </tr>  
<?php     

require "./class/render_search.php";
  
?> 
</table>
    
</body>
</html>

<?php  
}  
?> 