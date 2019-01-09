<?php

function getAll($tbl){
     include('connect.php');

     $queryAll = 'SELECT * FROM '.$tbl;
     $runAll = $pdo->query($queryAll);

     if($runAll){
       return $runAll;
     }else{
        $error = 'there was a problem accessing this info';
        return $error;
     }

}
   


  
?>