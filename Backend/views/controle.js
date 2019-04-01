function envoyer(){



var verif = 0;

if (document.getElementById('select01').value != "Selectionnez" && document.getElementById('optionsCheckbox').checked){
alert("Vous ne pouvez pas répondre en même temps aux boutons radio et au champ periode");
}
else{
verif ++;
}

nom=document.getElementById("nom").value;

if(nom.length==0)
{

	alert("Veuillez mettre le nom de l evenement");
}




if(document.getElementById('select01').value == "Selectionnez")
{
	alert("Vous avez oublie de specifier la periode de l'evenement !");
}


if(document.getElementById('boutiques').value == "")
{
	alert("Vous devez choisir une boutique");
}

if(document.getElementById('description').value == "")
{
	alert("Veuillez ajouter une description a votre evenement");
}

}

