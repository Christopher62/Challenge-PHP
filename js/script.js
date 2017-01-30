$(window).scroll(function() {
    if ($(this).scrollTop() >= 10) {
        $('#toTop').fadeIn(200);
    } else {
        $('#toTop').fadeOut(200);
    }
});
$('#toTop').click(function() {
    $('body,html').animate({
        scrollTop : 0
    }, 500);
});

// Vérifier le form

function couleur(champ, erreur){
   if(erreur)
      champ.style.color = "red";
   else
      champ.style.color = "green";
}

  function verifPseudo(champ){
    var regex1A = /^[aA-zZ]+[a-z]{1,}[0-9]{1,}$/;
    var regex1B = /^[aA-zZ]+[a-z]{1,}$/;
     if(!regex1A.test(champ.value) && !regex1B.test(champ.value) || champ.value.length > 30)
     {
        alert("Pseudo incorrect : il ne doit pas commencer par un nombre et n\'excède pas 30 caractères");
        alert("Type de pseudo accepté : test, test123, Test, Test123");
        couleur(champ, true);
        return false;
     }
     else{
        couleur(champ, false);
        return true;
     }
  }

  function verifFname(champ){
    var regex2 = /^[a-zA-Z]+[a-z]{1,}$/;
    if(!regex2.test(champ.value)){
      alert('Le prénom ne doit pas comporter de chiffre !');
      couleur(champ, true);
      return false;
   }
   else{
      couleur(champ, false);
      return true;
   }
}

function verifMail(champ){
   var regex3 = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex3.test(champ.value)){
      alert("Veuillez entrer un e-mail valide !");
      couleur(champ, true);
      return false;
   }
   else{
      couleur(champ, false);
      return true;
   }
}

function verifDate(champ){
   var regex4 = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
   if(!regex4.test(champ.value || champ.value == "")){
    alert("Merci de vérifier le champ \"Birth\" !");
    couleur(champ, true);
    return false;
 }
 else{
    couleur(champ, false);
    return true;
 }
}

function verifForm(f){

   var pseudoOk = verifPseudo(f.pseudo);
   var fnameOk = verifFname(f.firstname);
   var mailOk = verifMail(f.email);
   var dateOk = verifDate(f.date);

   if(pseudoOk && fnameOk && mailOk && dateOk){
      alert("Message envoyé");
      return true;
   }else{
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}
