
<?php

include "../model/db_connection.php"; // Connexion à la database


$result = mysqli_query($db, "SELECT * FROM `fiche_personne`"); // Récupère datas de la db

if(!$result){
    die('Could not get data: ' . mysqli_error($db));
}
?>
    <tr>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Email</td>
        <td>Voir</td>
        <td>Éditer</td>
        <td>Supprimer</td>
    </tr>
<?php
while($data = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $data['nom'];?></td>
        <td><?php echo $data['prenom'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><a href="profile.php?id_perso=<?php echo $data['id_perso']; ?>" target="_blank">Voir</a></td>
        <td><a href="edit_profile.php?id_perso=<?php echo $data['id_perso']; ?>" target="_blank">Éditer</a></td>
        <td><a href="delete_profile.php?id_perso=<?php echo $data['id_perso']; ?>" target="_blank">Supprimer</a></td>
    </tr>
    <?php
}
?>
