<?php


class Home{

    function showPacijenti(){
       
        include "C:\ph\htdocs\doktor\db\db.php";

        $stmt1 ="SELECT * FROM pacijenti ";
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
                        <tr>
                        <td><?php echo $nam ?></td>
                        <td><?php echo $lnam ?></td>
                        <td><?php echo $oi ?></td>
                        <td><?php echo $dob ?></td>
                        <td><?php echo $dij ?></td>
                        <td><button><a href="pogledaj.php?id=<?php echo $oi;?>">Pogledaj</a></button>
                        <button><a href="class/delete.php?id=<?php echo $oi;?>">izbriši</a></button></td>
                    </tr>
                    <?php    
                }
            }else{
                echo 'Nema pacijenata';}
                
    } 

   

}
?>


    
