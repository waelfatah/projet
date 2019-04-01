<?PHP
include "../core/vehiculeC.php";
$vehiculeC=new VehiculeC();
if (isset($_POST["matricule"])){
    $vehiculeC->supprimerVehicule($_POST["matricule"]);
    header('Location: afficherVehicule.php');
}

?>