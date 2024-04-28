
function confpass(e)
{
    var e=0;
    var pass1=document.getElementById('amdp').value;
    var pass2=document.getElementById('nmdp').value;
    var name2=document.getElementById('nmdp');
    if((pass1==pass2)||(name2.value.length <10))
    {document.getElementById('error0').innerHTML="<small style ='color: red'> L'ancien et le nouveau mot de passe sont identiques  </small>";
    e=0;
}
    else{
        document.getElementById('error0').innerHTML="";
        e=1;
        return e;
    }
  
}
function confpass2(a)
{
    var a=0;
    var pass1=document.getElementById('nmdp').value;
    var pass2=document.getElementById('cnmdp').value;
    if(pass1!=pass2)
    {document.getElementById('error7').innerHTML="<small style ='color: red'> les mots de passe ne correspondent pas   </small>";
    a=0;
}
    else{
        document.getElementById('error7').innerHTML="";
        a=1;
        return a;
    }

}
function Submit()
{
    if((confpass2(a) === 0) || (confpass(e) === 0))
    {  
        document.forms['change'].preventDefault();
        document.getElementById('error5').innerHTML="<small style='color: red'>Numéro</small>"
        
    }
}