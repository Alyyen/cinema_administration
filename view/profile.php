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
    <h2>Details</h2>
    <table border="1">
        <tr>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Email</td>
            <td>Date de naissance</td>
            <td>Ville</td>
        </tr>
<?php

include "../model/db_connection.php"; // Connexion à la database
$id = $_GET['id_perso'];
$show = mysqli_query($db, "SELECT * FROM `fiche_personne` WHERE id_perso='$id'"); // Récupère datas de la db

if(!$show){
    die('Could not get data: ' . mysqli_error($db));
}

while($info = mysqli_fetch_array($show)){
    ?>
    <tr>
        <td><?php echo $info['nom'];?></td>
        <td><?php echo $info['prenom'];?></td>
        <td><?php echo $info['email'];?></td>
        <td><?php echo $info['date_naissance'];?></td>
        <td><?php echo $info['ville'];?></td>
    </tr>
    <?php
}

?>
</table>
<a href="../view/homepage.php">Retour à la page d'accueil</a>

<?php mysqli_close($db); // Close connection ?>
</body>
</html>
