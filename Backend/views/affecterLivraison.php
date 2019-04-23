<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
ob_start();

// Instantiation and passing `true` enables exceptions
if (isset($_POST['livreur']) ){
$livraison1=new livraison($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['numero'],$_POST['email'],$_POST['adresse'],$_POST['livreur']);

$livraison1C=new LivraisonC();
$livraison1C->ajouterLivraison($livraison1);
header('Location: afficherAffecter.php');
ob_end_flush();
}else{
	echo "vérifier les champs";
}
//*/

?>