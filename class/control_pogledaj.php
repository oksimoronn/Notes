<?php

class View{

    function renderView(){
        include "C:\ph\htdocs\doktor\db\db.php";
        if(isset($_GET['id'])){

        $id = $_GET['id'];
        
        $stmt1 ="SELECT * FROM pacijenti WHERE OIB = ('$id')";
        $query = $pdo->prepare($stmt1);
        $query->execute();

        $nrows = $query-> rowCount();
        
            if($nrows != 0){
                
                foreach($query as $stmt) {  
                        $nam = $stmt['Ime'];
                        $lnam = $stmt['Prezime'];
                        $oi = $stmt['OIB'];
                        $dob = $stmt['Dob'];
                        $dij = $stmt['Dijagnoza'];
                        ?>
                        <form action="" method="post">
                        <label for="fname">Ime:</label><br>
                        <input type="text" id="fname" value="<?php echo $nam; ?>"><br>

                        <label for="fname">Prezime:</label><br>
                        <input type="text" id="fname" value="<?php echo $lnam; ?>"><br>

                        <label for="fname">OIB:</label><br>
                        <input type="text" id="fname" value="<?php echo $oi; ?>"><br>

                        <label for="fname">Datum Rođenja:</label><br>
                        <input type="text" id="fname" value="<?php echo $dob; ?>"><br>

                        <label for="fname">Dijagnoza:</label><br>
                        <input type="text" id="fname" value="<?php echo $dij; ?>"><br>

                        <input type="submit" value="submit">
                        </form>
                    </tr>
                    <?php    
                }
            }else {echo 'Pacijent ne postoji!';}

            if(isset($_POST['submit'])){
                
            }
    }

}
}
