function envoyer(){

 

nom=document.getElementById("nom").value;
prenom=document.getElementById("prenom").value;
if(nom.length==0)
{

	alert("Veuillez mettre votre nom");
}

if(prenom.length==0)
{

	alert("Veuillez mettre votre prenom");
}

if(document.getElementById('numero').value == "")
{
	alert("Vous avez oublie de mettre votre numero");
}

if(document.getElementById('cin').value == "")
{
	alert("Vous avez oublie de mettre votre identite");
}

 var chkZ = 1;
 for(i=0;i<document.getElementById('numero').value.length;++i)
   if(document.getElementById('numero').value.charAt(i) < "0"
   || document.getElementById('numero').value.charAt(i) > "9")
     chkZ = -1;
 if(chkZ == -1) {
   alert("Le numero de telephone doit etre un nombre!");
   document.getElementById('numero').focus();
  }


}