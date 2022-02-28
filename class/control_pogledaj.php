<?php

class View{

    function renderView(){
        include "C:\ph\htdocs\doktor\db\db.php";
        if(isset($_GET['id'])){

            $id = $_GET['id'];
            
            $stmt1 ="SELECT * FROM pacijenti WHERE OIB = ('$id')";
            $query = $pdo->prepare($stmt1);
            $query->execute();

            $res = $query->fetch(PDO::FETCH_ASSOC);
  
            $nam = $res['Ime'];
            $lnam = $res['Prezime'];
            $oi = $res['OIB'];
            $dob = $res['Dob'];
            $dij = $res['Dijagnoza'];
            ?>
            
            <form action="" method="post">
            <label for="name">Ime:</label><br>
            <input type="text" name="nam" id="name"value="<?php echo $nam; ?>"><br>

            <label for="lname">Prezime:</label><br>
            <input type="text" name="lnam" id="lname" value="<?php echo $lnam; ?>"><br>

            <label for="obi">OIB:</label><br>
            <input type="text" name="oi" id="obi" value="<?php echo $oi; ?>"><br>

            <label for="do">Datum Rođenja:</label><br>
            <input type="text" name="dob" id="do" value="<?php echo $dob; ?>"><br>

            <label for="dija">Dijagnoza:</label><br>
            <input type="text" name="dij" id="dija" value="<?php echo $dij; ?>"><br>
            <input type="submit" value="submit">
            </form>
            
            <?php 
    }

    if(count($_POST) > 0 ){

        $id = $_GET['id'];

        $namp = $_POST['nam'];
        $lnamp = $_POST['lnam'];
        $oip = $_POST['oi'];
        $dobp = $_POST['dob'];
        $dijp = $_POST['dij'];

        $stmt1 ="UPDATE pacijenti SET Ime=('$namp'), Prezime = ('$lnamp'), OIB = ('$oip'), Dob = ('$dobp'), Dijagnoza = ('$dijp') WHERE OIB = ('$id')";
        $query = $pdo->prepare($stmt1);
        $query->execute();

        header("location:./home_page.php");
    }

}
}