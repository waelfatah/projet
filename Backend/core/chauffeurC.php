<?php
include "../connexion.php";
class ChauffeurC {
function afficherChauffeur ($chauffeur){
		echo "Nom: ".$chauffeur->getNom()."<br>";
		echo "Prenom: ".$chauffeur->getPrenom()."<br>";
		echo "Cin: ".$chauffeur->getCin()."<br>";
		echo "Numero de telephone: ".$chauffeur->getNumero()."<br>";
		echo "E-mail: ".$chauffeur->getMail()."<br>";
	}

	function ajouterChauffeur($chauffeur){
		$sql="insert into chauffeur (nom,prenom,cin,numero,email) values ( :nom,:prenom,:cin,:numero,:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prÃ©pare la requete sql Ã  etre exÃ©cutÃ© par
		
        
        $nom=$chauffeur->getNom();
        $prenom=$chauffeur->getPrenom();
        $cin=$chauffeur->getCin();
        $numero=$chauffeur->getNumero();
        $email=$chauffeur->getMail();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cin',$cin);//bind value associe une valeur Ã  un parametre
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherChauffeurs(){
		//$sql="SElECT * From chauffeur e inner join formationphp.chauffeur a on e.cin= a.cin";
		$sql="SElECT * From chauffeur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerChauffeur($cin){
		$sql="DELETE FROM chauffeur where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierChauffeur($chauffeur,$cin){
		$sql="UPDATE chauffeur SET nom=:nom,prenom=:prenom,cin=:cinn, numero=:numero,email=:email WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$chauffeur->getNom();
        $prenom=$chauffeur->getPrenom();
        $cinn=$chauffeur->getCin();
        $numero=$chauffeur->getNumero();
        $email=$chauffeur->getMail();
		$datas = array( ':nom'=>$nom,':prenom'=>$prenom,':cinn'=>$cinn, ':cin'=>$cin,':numero'=>$numero,':email'=>$email);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererChauffeur($cin){
		$sql="SELECT * from chauffeur where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($maill){
		$sql="SELECT * from chauffeur where email=$maill";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>