<?PHP
include "../entities/vehicule.php";
include "../core/vehiculeC.php";

if (isset($_POST['matricule']) and isset($_POST['genre'])){
$vehicule1=new vehicule($_POST['matricule'],$_POST['genre']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$vehicule1C=new VehiculeC();
$vehicule1C->ajouterVehicule($vehicule1);
header('Location: afficherVehicule.php');
	
}else{
	echo "verifier les champs";
}
//*/

?>