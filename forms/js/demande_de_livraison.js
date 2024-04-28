function confid()
{var e=0;
    var pass1=document.getElementById('id1').value;
    var pass2=document.getElementById('id2').value;
    if(pass1==pass2)
    {document.getElementById('error51').innerHTML="<small style ='color: red'>Les IDs doivent être différents! </small>";
e=0;
}
    else{
        document.getElementById('error51').innerHTML="";
        e=1;
    }
    return e;
}
function confadresse()
{var e=0;
    var pass1=document.getElementById('adresse1').value;
    var pass2=document.getElementById('adresse2').value;
    if(pass1==pass2)
    {document.getElementById('error52').innerHTML="<small style ='color: red'>Les adresses sont identiques! </small>";
e=0;
}
    else{
        document.getElementById('error52').innerHTML="";
        e=1;
    }
    return e;
}


