function errorValidation2()
{

var name2=document.getElementById('Nom_ar');
if(name2.value.length <3)
{
document.getElementById('error2').innerHTML="<small style ='color: red'> Prenom doit etre en min 3 caractere </small>"
}
else{
    document.getElementById('error2').innerHTML="";
}
}
function categorie()
{
    var cat1=document.getElementById('Catégorie_ar').value;
    if((cat1!="Meuble")&&(cat1!="Vetement")&&(cat1!="Livre")&&(cat1!="Accessoire")&&(cat1!="Immobilie")&&(cat1!="Multimedia")&&(cat1!="Jardin")&&(cat1!="Loisir")&&(cat1!="Transport"))
    {document.getElementById('error5').innerHTML="<small style ='color: red'> Categorie n'existe pas </small>";

}
    else{
        document.getElementById('error5').innerHTML="";
      
    }
    return e;
}
function etat()
{
    var cat1=document.getElementById('Etat_ar').value;
    if((cat1!="Neuf avec étiquettes")&&(cat1!="Neuf sans emballage")&&(cat1!="Neuf avec défauts")&&(cat1!="Occasion"))
    {document.getElementById('error6').innerHTML="<small style ='color: red'> Etat non disponilbe </small>";

}
    else{
        document.getElementById('error6').innerHTML="";
      
    }
    return e;
}