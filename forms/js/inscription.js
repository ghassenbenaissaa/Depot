
function confpass()
{var e=0;
    var pass1=document.getElementById('mdp').value;
    var pass2=document.getElementById('pass2').value;
    if(pass1!=pass2)
    {document.getElementById('error5').innerHTML="<small style ='color: red'> les mots de passe ne correspondent pas </small>";
e=0;
}
    else{
        document.getElementById('error5').innerHTML="";
        e=1;
    }
    return e;
}


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
function CalculAge() {
    var td=new Date();// Le date d'ouverture de la page (aujourd'hui)
    var dtn=document.getElementById('date_de_naissance').value; // on lit la date de naissance
    var an=dtn.substr(0,4); // l'année (les quatre premiers caractères de la chaîne à partir de zéro)
    var age=td.getFullYear()-an; // l'âge du joueur
   // document.getElementById('Age').innerHTML=age+' ans'; // que l'on place dans la balise span d'id idAge
if(age<18)
{
    document.getElementById('Age').innerHTML="<small style ='color : red' >Afin que vous soyez membre , il faut avoir l âge adulte</small>";
}
else{
    document.getElementById('Age').innerHTML="";
}
}