<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="Image/icone.png">
    <link rel='stylesheet' href='CSS/fichier.css'>
    <title>Équipe</title>
</head>
<body class="blur" >

    <h1 class="centre"><u>Équipe</u></h1>
<nav>
    <div class="border">
    <li class="active">
            <a href="index.php">Accueil</a> <!-- Tout les boutons pour la navigation -->
        </li>
        <li>
            <a href="PHP/ajout.php">Ajouter équipe</a>
        </li>

        <li>
            <a href="PHP/equipe.php">Voir équipe</a>
        </li>

        <li>
            <a href="PHP/modif.php">Modif</a>
        </li>
        <li>
            <a href="connect.php">Connexion</a>
        </li>
    </div>
</nav>
</body>
</html>