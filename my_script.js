const d = document.getElementById("Sport");
console.log(d);
document.getElementById("formulaire").addEventListener("submit", function (nr) {
  nr.preventDefault();

  var erreur;
  var sexe = document.getElementById("sexe");
  var name = document.getElementById("name");
  var mail = document.getElementById("mail");
  var tel = document.getElementById("tel");
  var chekb = document.getElementById("chekb");

  if (!sexe.value) {
    erreur = "Veuillez choisir votre sexe.";
  }
  if (!name.value) {
    erreur = "Veuillez entrer votre pseudo.";
  }
  if (!mail.value) {
    erreur = "Veuillez entrer votre email.";
  }
  if (!tel.value) {
    erreur = "Veuillez entrer votre numéro de téléphone.";
  }
  if (!chekb.value) {
    erreur = "Veuillez remplir au moins 1 case.";
  }

  if (erreur) {
    nr.preventDefault();
    document.getElementById("erreur").innerHTML = erreur;
    return false;
  } else {
    alert("Formulaire envoyé !");
  }
});