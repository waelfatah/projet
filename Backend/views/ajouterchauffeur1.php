<?php
include "../entities/chauffeur.php";
include "../core/chauffeurC.php";


if(isset($_POST['Ajouter'])){
    $errors = array();

    if($_POST['nom'] == ''){
        $errors[1] = '<span class="error">Please type your name</span>';
    }else if($_POST['cin'] == ''){
        $errors[2] = '<span class="error">Please type your phone number</span>';
    }else if($_POST['email'] == ''){
        $errors[3] = '<span class="error">Please type your country</span>';
    }else{
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
}
}
//*/
?>