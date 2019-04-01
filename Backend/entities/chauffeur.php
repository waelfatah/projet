<?php

class Chauffeur{
	

	private $nom;
	private $prenom;
	private $cin;
	private $numero;
	private $email;


	function __construct($nom,$prenom,$cin,$numero,$email)
	{	

		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->cin=$cin;
		$this->numero=$numero;
		$this->email=$email;
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

}

?>