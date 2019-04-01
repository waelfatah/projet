<?php

class Vehicule{
	

	private $matricule;
	private $genre;



	function __construct($matricule,$genre)
	{	

		$this->matricule=$matricule;
		$this->genre=$genre;
	}


	function getMatricule(){
		return $this->matricule;
	}

	function getGenre(){
		return $this->genre;
	}


	function setMatricule($matricule){
		$this->matricule=$matricule;
	}

	function setGenre($genre){
		$this->genre=$genre;
	}


}

?>