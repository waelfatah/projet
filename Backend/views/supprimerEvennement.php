<?PHP
include "../core/evennementC.php";
$evennementC=new EvennementC();
if (isset($_POST["nom"])){
	$evennementC->supprimerEvennement($_POST["nom"]);
	header('Location: afficherEvennement.php');
}

?>