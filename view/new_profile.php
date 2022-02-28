<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un utilisateur</title>
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
    <h2>Ajouter les informations</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="search">
    <label for="nom">Nom</label><input type="text" name="nom" placeholder="Martin"/><br>
    <label for="prenom">Prénom</label><input type="text" name="prenom" placeholder="Jacquie"/><br>
    <label for="email">Email</label><input type="email" name="email" placeholder="jacquie.martin@mail.com"/></td><br>
    <label for="date_naissance">Date de naissance</label><input type="date" name="date_naissance" placeholder="01/01/01"/><br>
    <label for="cpostal">Code Postal</label><input type="text" name="cpostal" placeholder="94290"/><br>
    <label for="ville">Ville</label><input type="text" name="ville" placeholder="Paris"/><br>
   
    <?php
    include "../model/db_connection.php"; // Connexion à la database
    include "../model/db_user_new.php";
    ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" name="submit" value="submit">Créer l'utilisateur</button> <!-- Add action avec une page de réussite -->
    <a href="../view/homepage.php">Retour à la page d'accueil</a>
</form>

</body>
</html>