<?php
    include "../config/conn.php";

    #ikuti guideline
   
    $row = $dbconnect->query("INSERT INTO material VALUES ('$material_id', '$material_name', '$material_price', '$material_stock')");

    header("location:../views/employee/procurement/material.php?page=3A");
?>