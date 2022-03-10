<?php


class Home{

    function showPacijenti(){
       
        require "./db/db.php";

        $stmt1 =$pdo->prepare("SELECT * FROM pacijenti");
        $stmt1->execute();

        $nrows = $stmt1-> rowCount();
        
            if($nrows != 0){
                
                foreach($stmt1 as $stmt) {  
                        $nam = $stmt['Ime'];
                        $lnam = $stmt['Prezime'];
                        $oi = $stmt['OIB'];
                        $dob = $stmt['Dob'];
                        $dij = $stmt['Dijagnoza'];
                        ?>
                        <tr>
                        <td><?php echo $nam ?></td>
                        <td><?php echo $lnam ?></td>
                        <td><?php echo $oi ?></td>
                        <td><?php echo $dob ?></td>
                        <td><?php echo $dij ?></td>
                        <td><button><a href="pogledaj.php?id=<?php echo $oi;?>">Izmjeni</a></button>
                        <button><a href="class/delete.php?id=<?php echo $oi;?>">izbriši</a></button></td>
                    </tr>
                    <?php    
                }
            }else{echo 'Nema pacijenata';}
        $stmt1 = null;
    } 

}
?>


    
