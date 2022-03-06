<?php

class Search{
    public  $src;

    function __construct($src){
        $this->src = $src;

    }

    function searchIme(){
        require_once "C:\ph\htdocs\doktor\db\db.php";
            
        $stmt = $pdo->prepare("SELECT * FROM pacijenti WHERE Ime LIKE ?");
        $stmt->execute([$this->src]);

        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        $nam = $res['Ime'];
        $lnam = $res['Prezime'];
        $oi = $res['OIB'];
        $dob = $res['Dob'];
        $dij = $res['Dijagnoza'];
        ?>
        
        <tr>
            <td><?php echo $nam ?></td>
            <td><?php echo $lnam ?></td>
            <td><?php echo $oi ?></td>
            <td><?php echo $dob ?></td>
            <td><?php echo $dij ?></td>
            <td>
                <button><a href="pogledaj.php?id=<?php echo $oi;?>">Izmjeni</a></button>
                <button><a href="class/delete.php?id=<?php echo $oi;?>">izbriši</a></button>
            </td>
        </tr>
            
        <?php 

        $stmt = null;
    }

    function searchOib(){
        require_once "C:\ph\htdocs\doktor\db\db.php";
            
        $stmt = $pdo->prepare("SELECT * FROM pacijenti WHERE OIB LIKE ?");
        $stmt->execute([$this->src]);

        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        $nam = $res['Ime'];
        $lnam = $res['Prezime'];
        $oi = $res['OIB'];
        $dob = $res['Dob'];
        $dij = $res['Dijagnoza'];
        ?>
        
        <tr>
            <td><?php echo $nam ?></td>
            <td><?php echo $lnam ?></td>
            <td><?php echo $oi ?></td>
            <td><?php echo $dob ?></td>
            <td><?php echo $dij ?></td>
            <td>
                <button><a href="pogledaj.php?id=<?php echo $oi;?>">Izmjeni</a></button>
                <button><a href="class/delete.php?id=<?php echo $oi;?>">izbriši</a></button>
            </td>
        </tr>
            
        <?php 

        $stmt = null;
    }
}