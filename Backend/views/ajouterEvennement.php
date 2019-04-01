<?PHP
include "../entities/evennement.php";
include "../core/evennementC.php";

if (isset($_POST['nom']) and isset($_POST['date_deb']) and isset($_POST['periode']) and   isset($_POST['boutiques']) and isset($_POST['description'])){
$evennement1=new evennement($_POST['nom'],$_POST['date_deb'],$_POST['periode'],$_POST['boutiques'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$evennement1C=new EvennementC();
$evennement1C->ajouterEvennement($evennement1);
header('Location: afficherEvennement.php');
	
}else{
	echo "verifier les champs";
}
//*/

?>