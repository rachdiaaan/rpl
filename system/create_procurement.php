<?php
    include "../config/conn.php";

    


    
   
    $row = $dbconnect->query("INSERT INTO procurement VALUES ('$procurement_id', '$procurement_date', '$procurement_stats', '$bom_id')");

    header("location:../views/employee/procurement/procurement.php?page=1A");
?>
