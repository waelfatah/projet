<?php

class Evennement{
	

	private $nom;
	private $date_deb;
	private $date_fin;
	private $boutiques;
	private $description;


	function __construct($nom,$date_deb,$date_fin,$boutiques,$description)
	{	

		$this->nom=$nom;
		$this->date_deb=$date_deb;
		$this->date_fin=$date_fin;
		$this->boutiques=$boutiques;
		$this->description=$description;
	}


	function getNom(){
		return $this->nom;
	}

	function getDateDeb(){
		return $this->date_deb;
	}

	function getDateFin(){
		return $this->date_fin;
	}


	function getBoutiques(){
		return $this->boutiques;
	}

	function getDesc(){
		return $this->description;
	}

	function setNom($nom){
		$this->nom=$nom;
	}

	function setDateDeb($date_deb){
		$this->date_deb=$date_deb;
	}

	function setDateFin($date_fin){
		$this->date_fin=$date_fin;
	}


	function setBoutiques($boutiques){
		$this->boutiques=$boutiques;
	}

	function setDesc($description){
		$this->description=$description;
	}

}

?>