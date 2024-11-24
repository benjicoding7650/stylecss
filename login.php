<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email != "" && $password != ""){
        // connexion à la bdd
        $req = $bdd->query("SELECT * FROM users WHERE email = "$email AND mdp = '$password');
        if($rep['id'] != false){

            echo "Vous etes connecté !";
        }
        else{
            $error_msg = "Email ou mdp incorect !";
        }
    }
}
?>
    <form method="POST" action="">
        <label for="email">Email</label>
        <input type="email" placeholder="Entrez votre e-mail..." id="email"name="email" required />
        <label for="email">Mot de passe</label>
        <input type="password" placeholder="Entrez votre e-mail..."id="password"name="pasword"required />
    </form>
    <input type="submit" value="Se connecter"name="ok">


</body>
</html>