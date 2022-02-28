<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
    <h2>Utilisateurs</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="search">
        <input type="text" id="name" name="name" minlength="1" maxlength="45" size="45">
        <input type="submit" name="term" value="Rechercher"/>
    </form>
    <br>
    <table border="1">

    <!-- ENLEVER LE PHP ET UTILISER CONTROLLER-->
    <?php
    include "../model/db_user_profile.php"; // Recherche des utilisateurs
    ?>
    </table>
    
</body>
</html>