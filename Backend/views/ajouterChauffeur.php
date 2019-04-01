<?PHP
include "../entities/chauffeur.php";
include "../core/chauffeurC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cin']) and   isset($_POST['numero']) and isset($_POST['email'])){
$chauffeur1=new chauffeur($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['numero'],$_POST['email']);
//Partie2
/*
var_dump($employe1);
} 
*/
//Partie3
$chauffeur1C=new ChauffeurC();
$chauffeur1C->ajouterChauffeur($chauffeur1);
header('Location: afficherChauffeur.php');
	
}else{
	echo "verifier les champs";
}
//*/

?>