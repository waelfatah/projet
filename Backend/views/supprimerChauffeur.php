<?PHP
include "../core/chauffeurC.php";
$chauffeurC=new ChauffeurC();
if (isset($_POST["cin"])){
	$chauffeurC->supprimerChauffeur($_POST["cin"]);
	header('Location: afficherChauffeur.php');
}

?>