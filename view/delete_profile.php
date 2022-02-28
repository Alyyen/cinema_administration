<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer le profil</title>
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
    <h2>Supprimer les informations</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="search">
  
    <?php
    include "../model/db_connection.php"; // Connexion à la database
    include "../model/db_user_delete.php";
    // ADD un echo sur la hp pour dire action effectuée
    ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" name="delete" value="submit" id="delete">Supprimer le compte</button> <!-- Add action avec une page de réussite -->
    <a href="../view/homepage.php">Retour à la page d'accueil</a>
</form>

</body>
</html>
