<?php
include "../connexion.php";
class LivraisonC {
function afficherLivraison ($livraison){
		echo "Nom: ".$livraison->getNom()."<br>";
		echo "Prenom: ".$livraison->getPrenom()."<br>";
		echo "Cin: ".$livraison->getCin()."<br>";
		echo "Numero de telephone: ".$livraison->getNumero()."<br>";
		echo "E-mail: ".$livraison->getMail()."<br>";
		echo "Adresse: ".$livraison->getAdresse()."<br>";
	}

	function ajouterLivraison($livraison){
		$sql="INSERT INTO livraison (nom,prenom,cin,numero,email,adresse) VALUES ( :nom,:prenom,:cin,:numero,:email,:adresse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prÃ©pare la requete sql Ã  etre exÃ©cutÃ© par
		
        
        $nom=$livraison->getNom();
        $prenom=$livraison->getPrenom();
        $cin=$livraison->getCin();
        $numero=$livraison->getNumero();
        $email=$livraison->getMail();
        $adresse=$livraison->getAdresse();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cin',$cin);//bind value associe une valeur Ã  un parametre
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraisons(){
		//$sql="SElECT * From chauffeur e inner join formationphp.chauffeur a on e.cin= a.cin";
		$sql="SELECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivraison($cin){
		$sql="DELETE FROM livraison where cin= :cin";
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
	function modifierLivraison($livraison,$cin){
		$sql="UPDATE livraison SET nom=:nom,prenom=:prenom,cin=:cinn, numero=:numero,email=:email,adresse=:adresse WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$livraison->getNom();
        $prenom=$livraison->getPrenom();
        $cinn=$livraison->getCin();
        $numero=$livraison->getNumero();
        $email=$livraison->getMail();
        $adresse=$livraison->getAdresse();
		$datas = array( ':nom'=>$nom,':prenom'=>$prenom,':cinn'=>$cinn, ':cin'=>$cin,':numero'=>$numero,':email'=>$email,':adresse'=>$adresse);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivraison($cin){
		$sql="SELECT * from livraison WHERE cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeLivraisons($cinn){
		$sql="SELECT * from livraison where cin=$cinn";
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