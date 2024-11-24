<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form method="POST" action="traitement.php">
  <label for="nom"> Votre nom</label>
  <input type="text" id="nom" name="nom"placeholder="Entrez votre nom..." required>
  <br />
 

  <label for="prenom"> Votre Prénom</label>
  <input type="text" id="prenom" name="prenom"placeholder="Entrez votre prenom...">
<br />

  <label for="pseudo"> Votre Pseudo</label>
  <input type="text" id="pseudo" name="pseudo"placeholder="Entrez votre pseudo...">
  <br />
</form>


<label for="e-mail"> Votre e-mail</label>
  <input type="text" id="e-mail" name="e-mail"placeholder="Entrez votre e-mail...">

  <br />

  <input type="submit" value="M'inscrire" name="ok">
  
</body>
</html>