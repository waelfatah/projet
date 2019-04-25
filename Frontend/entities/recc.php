<?php

class recc{
	
	private $id_chauffeur;
	private $type;



	function __construct($id_chauffeur,$type)
	{	
		$this->id_chauffeur=$id_chauffeur;
		$this->type=$type;
	}

	function getid_chauffeur(){
		return $this->id_chauffeur;
	}


	function gettype(){
		return $this->type;
	}


	function setid_chauffeur($id_chauffeur){
		$this->id_chauffeur=$id_chauffeur;
	}

	function settype($type){
		$this->type=$type;
	}


}

?>