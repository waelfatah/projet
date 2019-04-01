<?PHP
include "../core/livraisonC.php";
$livraisonC=new LivraisonC();
if (isset($_POST["cin"])){
	$livraisonC->supprimerLivraison($_POST["cin"]);
	header('Location: afficherLivraison.php');
}

?>