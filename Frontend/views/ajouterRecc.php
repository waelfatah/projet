<?PHP
include "../entities/recc.php";
include "../core/reccC.php";
ob_start();

// Instantiation and passing `true` enables exceptions
if (isset($_POST['type'])){
$recc1=new recc($_POST['id_chauffeur'],$_POST['type']);

$recc1C=new reccC();
$recc1C->ajouterrecc($recc1);

$nbrecc=$recc1C->compterRecc($_POST['id_chauffeur']);
$result=$nbrecc->fetch();

if ($result[0]>3) {
	$recc1C->supprimerChauffeur($_POST['id_chauffeur']);
	$recc1C->supprimerrecc($_POST['id_chauffeur']);
}

header('Location: coordonneesChauffeur.php');
ob_end_flush();
}else{
	echo "vérifier les champs";
}
//*/

?>