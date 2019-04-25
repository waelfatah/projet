<?php
include "../connexion.php";
class reccC {
function afficherrecc ($recc){
		echo "Id Chauffeur: ".$recc->getid_chauffeur()."<br>";
		echo "Type: ".$recc->gettype()."<br>";
	}

	function ajouterrecc($recc){
		$sql="INSERT INTO recchauffeur (id_chauffeur,type) VALUES (:id_chauffeur,:type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prÃ©pare la requete sql Ã  etre exÃ©cutÃ© par
		
        $id_chauffeur=$recc->getid_chauffeur();
        $type=$recc->gettype();
        $req->bindValue(':id_chauffeur',$id_chauffeur);
		$req->bindValue(':type',$type);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}


	function suppAutoChauffeur($id_chauffeur){
		$sql="SELECT COUNT(*) From recchauffeur where id_chauffeur=".$cin." AND type='Negative' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$req;
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function compterRecc($id_chauffeur){
		$sql="SELECT COUNT(*) From recchauffeur where id_chauffeur=".$id_chauffeur." AND type='Negative'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$req;
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function getChauffeur($id_chauffeur){
		$sql="SELECT * From recchauffeur inner join chauffeur on chauffeur.cin=recc.id_chauffeur where chauffeur.cin=$id_chauffeur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function afficherreccs(){
		//$sql="SElECT * From chauffeur e inner join formationphp.chauffeur a on e.id_chauffeur= a.id_chauffeur";
		$sql="SELECT * From recchauffeur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerrecc($id_chauffeur){
		$sql="DELETE FROM recchauffeur where id_chauffeur= :id_chauffeur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_chauffeur',$id_chauffeur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

		function supprimerChauffeur($id_chauffeur){
		$sql="DELETE FROM chauffeur where cin=".$id_chauffeur."";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_chauffeur',$id_chauffeur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierrecc($recc,$id_chauffeur){
		$sql="UPDATE recchauffeur SET id_chauffeur=:id_chauffeurn, type=:type WHERE id_chauffeur=:id_chauffeur";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $id_chauffeur=$recc->getid_chauffeur();
        $type=$recc->gettype();
		$datas = array( ':id_chauffeur'=>$id_chauffeur, ':type'=>$type,':id_chauffeurn'=>$id_chauffeurn);
		$req->bindValue(':id_chauffeur',$id_chauffeur);
		$req->bindValue(':type',$type);
		$req->bindValue(':id_chauffeurn',$id_chauffeurn);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererrecc($id_chauffeur){
		$sql="SELECT * from recc WHERE id_chauffeur=$id_chauffeur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	
	function rechercherListereccs($recherche){
		$sql="SELECT * from recc where id_chauffeur=".$recherche."";
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