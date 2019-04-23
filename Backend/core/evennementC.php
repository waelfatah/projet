<?php
include "../connexion.php";
class EvennementC {
function afficherEvennement ($evennement){
		echo "Nom: ".$evennement->getNom()."<br>";
		echo "Date Debut: ".$evennement->getDateDeb()."<br>";
		echo "Date Fin: ".$evennement->getDateFin()."<br>";
		echo "Boutiques: ".$evennement->getBoutiques()."<br>";
		echo "Description: ".$evennement->getDesc()."<br>";
	}

	function ajouterEvennement($evennement){
		$sql="INSERT INTO evennement (nom,date_deb,date_fin,boutiques,description) VALUES (:nom,:date_deb,:date_fin,:boutiques,:description)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prÃ©pare la requete sql Ã  etre exÃ©cutÃ© par
		
        
        $nom=$evennement->getNom();
        $date_deb=$evennement->getDateDeb();
        $date_fin=$evennement->getDateFin();
        $boutiques=$evennement->getBoutiques();
        $description=$evennement->getDesc();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date_deb',$date_deb);
		$req->bindValue(':date_fin',$date_fin);
		//bind value associe une valeur Ã  un parametre
		$req->bindValue(':boutiques',$boutiques);
		$req->bindValue(':description',$description);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEvennements(){
		//$sql="SElECT * From chauffeur e inner join formationphp.chauffeur a on e.cin= a.cin";
		$sql="SELECT * From evennement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEvennement($nom){
		$sql="DELETE FROM evennement where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEvennement($evennement,$nom){
		$sql="UPDATE evennement SET nom=:nomm, date_deb=:date_deb,date_fin=:date_fin, boutiques=:boutiques, description=:description WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nomm=$evennement->getNom();
        $date_deb=$evennement->getDateDeb();
        $date_fin=$evennement->getDateFin();
        $boutiques=$evennement->getBoutiques();
        $description=$evennement->getDesc();
		//$datas = array(':nomm'=>$nomm, ':nom'=>$nom,':date_deb'=>$date_deb,':periode'=>$periode,':boutiques'=>$boutiques,':description'=>$description);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':date_deb',$date_deb);
		$req->bindValue(':date_fin',$date_fin);
		$req->bindValue(':boutiques',$boutiques);
		$req->bindValue(':description',$description);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEvennement($nom){
		$sql="SELECT * from evennement WHERE nom='$nom'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEvennements($nomm){
		$sql="SELECT * from evennement where nom=$nomm";
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