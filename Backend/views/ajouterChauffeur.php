<?PHP
include "../entities/chauffeur.php";
include "../core/chauffeurC.php";
include "mailChauffeur.php";
include "nexmo/nexmo/src/NexmoMessage.php";
ob_start();
$nexmo_sms = new NexmoMessage('c8d004c9','MaACRm1fHp92yqNB');
// Instantiation and passing `true` enables exceptions
if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['cin']) and isset($_POST['numero']) and isset($_POST['email'])  and isset($_POST['etat'])){
$chauffeur1=new chauffeur($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['numero'],$_POST['email'],$_POST['etat'],$_POST['recc'],$_POST['vehicule']);
$chauffeur1C=new ChauffeurC();
$chauffeur1C->ajouterChauffeur($chauffeur1);
$numtel=$_POST['numero']+21600000000;

$identite = $_POST['prenom']." ".$_POST['nom']; 
if ($_POST['etat']=='Present') {
	$nexmo_sms->sendText($numtel,'CasaSport','Bienvenue a CasaSport'." ".$identite);
}
else
{
	$nexmo_sms->sendText($numtel,'CasaSport',$identite." ".'Bienvenue a CasaSport mais veuillez vous presenter avant d obtenir des sanctions. ');
}
//echo $nexmo_sms->displayOverview($info);
sendConfirmationChauffeur($_POST['email']);

header('Location: afficherChauffeur.php');
ob_end_flush();
}else{
	echo "vérifier les champs";
}
//*/

?>