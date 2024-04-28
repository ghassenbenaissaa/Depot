
function errorValidation()
{

var name=document.getElementById('nom');
if(name.value.length <3)
{//name.nextSibling.innerHTML=" Nom doit etre en min 3 caractere ";
document.getElementById('error').innerHTML="<small style ='color: red'> Nom doit etre en min 3 caractere </small>"
}
else{
    document.getElementById('error').innerHTML="";
}
}
function errorValidation2()
{

var name2=document.getElementById('prenom');
if(name2.value.length <4)
{
document.getElementById('error2').innerHTML="<small style ='color: red'> Prenom doit etre en min 4 caractere </small>"
}
else{
    document.getElementById('error2').innerHTML="";
}
}
function pass()
{
  var name=document.getElementById('mdp');  
  if(name.value.length<10)
  {
    document.getElementById('pas').innerHTML="<small style ='color : red' > mot de passe faible </small>";
  }
  else{document.getElementById('pas').innerHTML="";}
}

function errorValidation0()
{

var name=document.getElementById('email');
if(email.value != '^[0-9a-z._-]+@{1}[0-9a-z.-]{2,}[.]{1}[a-z]{2,5}$' )
{//name.nextSibling.innerHTML=" Nom doit etre en min 3 caractere ";
document.getElementById('error3').innerHTML="<small style ='color: red'> Adresse non valide </small>"
}
else{
    document.getElementById('error3').innerHTML="";
}
}
function CalculAge() {
  var td=new Date();// Le date d'ouverture de la page (aujourd'hui)
  var dtn=document.getElementById('ddn').value; // on lit la date de naissance
  var an=dtn.substr(0,4); // l'année (les quatre premiers caractères de la chaîne à partir de zéro)
  var age=td.getFullYear()-an; // l'âge du joueur
 document.getElementById('Age').innerHTML=age+' ans'; // que l'on place dans la balise span d'id idAge
if(age<18)
{
 document.getElementById('Age').innerHTML="<small style ='color : red' >Ce site est réservé aux adultes (+18ans) </small>";
}
else{
  document.getElementById('Age').innerHTML="";
}
}