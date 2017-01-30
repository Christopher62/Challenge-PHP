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

function verifPseudo(champ){
  var regex = /^[aA-zZ]{2,}$/;
  if(!regex.test(champ.value) || champ.value.length > 30){
    alert('Pseudo incorrect : il ne doit pas commencer par un nombre et n\'excède pas 30 caractères');
  }
}

function verifFname(champ){
  var regex2 = /^[aA-zZ]+[a-z]{1,}$/;
  if(!regex2.test(champ.value)){
    alert('Le prénom ne doit pas comporter de chiffre !');
  }
}
function verifMail(champ){
   var regex3 = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex3.test(champ.value)){
    alert("merci de vérifier votre email");
   }
}
function verifDate(champ){
   var regex4 = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
   if(!regex4.test(champ.value || champ.value == "")){
    alert("merci de vérifier le champ \"Birth\" !");
   }
}
function verifForm(f){

   var pseudoOk = verifPseudo(f.pseudo);

   var fnameOk = verifFname(f.firstname);

   var mailOk = verifMail(f.email);

   var dateOk = verifDate(f.birth);


   if(pseudoOk && fnameOk && mailOk){

      return true;

   }else{

      alert("Veuillez remplir correctement tous les champs");

      return false;

    }
}
