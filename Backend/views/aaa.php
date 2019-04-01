<?php

include "../entities/vehicule.php";
include "../core/vehiculeC.php";
if (isset($_GET['matricule'])){
    $vehiculeC=new VehiculeC();
    $result=$vehiculeC->recupererVehicule($_GET['matricule']);
    foreach($result as $row){
        $matricule=$row['matricule'];
        $genre=$row['genre'];


?>