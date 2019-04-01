<?php

class Evennement{
	

	private $nom;
	private $date_deb;
	private $periode;
	private $boutiques;
	private $description;


	function __construct($nom,$date_deb,$periode,$boutiques,$description)
	{	

		$this->nom=$nom;
		$this->date_deb=$date_deb;
		$this->periode=$periode;
		$this->boutiques=$boutiques;
		$this->description=$description;
	}


	function getNom(){
		return $this->nom;
	}

	function getDateDeb(){
		return $this->date_deb;
	}

	function getPeriode(){
		return $this->periode;
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

	function setPeriode($periode){
		$this->periode=$periode;
	}

	function setBoutiques($boutiques){
		$this->boutiques=$boutiques;
	}

	function setDesc($description){
		$this->description=$description;
	}

}

?>