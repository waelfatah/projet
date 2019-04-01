<?php
include "../connexion.php";
class VehiculeC {
function afficherVehicule ($vehicule){
		echo "Nom: ".$vehicule->getMatricule()."<br>";
		echo "Prenom: ".$vehicule->getGenre()."<br>";
	}

	function ajouterVehicule($vehicule){
		$sql="insert into vehicule (matricule,genre) values ( :matricule,:genre)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prÃ©pare la requete sql Ã  etre exÃ©cutÃ© par
		
        
        $matricule=$vehicule->getMatricule();
        $genre=$vehicule->getGenre();
		$req->bindValue(':matricule',$matricule);//bind value associe une valeur Ã  un parametre
		$req->bindValue(':genre',$genre);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherVehicules(){
		//$sql="SElECT * From chauffeur e inner join formationphp.chauffeur a on e.cin= a.cin";
		$sql="SElECT * From vehicule";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerVehicule($matricule){
		$sql="DELETE FROM vehicule where matricule= :matricule";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':matricule',$matricule);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierVehicule($vehicule,$matricule){
		$sql="UPDATE vehicule SET matricule=:matriculen, genre=:genre WHERE matricule=:matricule";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$matriculen=$vehicule->getMatricule();
        $genre=$vehicule->getGenre();
		$datas = array(':matriculen'=>$matriculen, ':matricule'=>$matricule, ':genre'=>$genre);
		$req->bindValue(':matriculen',$matriculen);
		$req->bindValue(':matricule',$matricule);
		$req->bindValue(':genre',$genre);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererVehicule($matricule){
		$sql="SELECT * from vehicule where matricule='$matricule'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeVehicules($matriculen){
		$sql="SELECT * from vehicule where matricule=$matriculen";
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