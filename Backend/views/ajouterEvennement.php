<?PHP
include "../entities/evennement.php";
include "../core/evennementC.php";

if (isset($_POST['nom']) and isset($_POST['date_deb']) and isset($_POST['date_fin']) and   isset($_POST['boutiques']) and isset($_POST['description'])){


	$d1=$_POST['date_deb'];
	$d2=$_POST['date_fin'];
	$today=date("Y-m-d");
	if($d1<=$today)
	{
		echo 'Vous ne pouvez pas ajouter un evennement aujourdhui ou inserer une date inferieure';
	}
	else
	{
	if($d1>$d2)
	{
		echo 'Verifier les dates de l evennement';
	}

	else

	{



$evennement1=new evennement($_POST['nom'],$_POST['date_deb'],$_POST['date_fin'],$_POST['boutiques'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$evennement1C=new EvennementC();
$evennement1C->ajouterEvennement($evennement1);
header('Location: afficherEvennement.php');
	}
}
}else{
	echo "verifier les champs";
}
//*/

?>