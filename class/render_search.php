<?php
include "control_search.php";

if(isset($_GET)){
    $src = $_GET['search'];

    $r= intval($src);
    
    $res = new Search($src);
    
    if($r > 0){
        $res->searchOib();

    }else{
        $res->searchIme();}

}


   