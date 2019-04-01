<?php

class Livraison{
	

	private $nom;
	private $prenom;
	private $cin;
	private $numero;
	private $email;
	private $adresse;


	function __construct($nom,$prenom,$cin,$numero,$email,$adresse)
	{	

		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->cin=$cin;
		$this->numero=$numero;
		$this->email=$email;
		$this->adresse=$adresse;
	}


	function getNom(){
		return $this->nom;
	}

	function getPrenom(){
		return $this->prenom;
	}

	function getCin(){
		return $this->cin;
	}

	function getNumero(){
		return $this->numero;
	}

	function getMail(){
		return $this->email;
	}

	function getAdresse(){
		return $this->adresse;
	}

	function setNom($nom){
		$this->nom=$nom;
	}

	function setPrenom($prenom){
		$this->prenom=$prenom;
	}

	function setCin($cin){
		$this->cin=$cin;
	}

	function setNumero($numero){
		$this->numero=$numero;
	}

	function setMail($email){
		$this->email=$email;
	}

	function setAdresse($adresse){
		$this->adresse=$adresse;
	}

}

?>