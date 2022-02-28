<?php
include "../model/db_connection.php"; // Connexion à la database

if(isset($_POST['name'])){
    $term = mysqli_real_escape_string($db, $_REQUEST['name']); 
    
    $result = mysqli_query($db, "SELECT * FROM `fiche_personne` WHERE nom LIKE '%$term%' OR prenom LIKE '%$term%'"); // Récupère datas de la db

    if(!$result){
        die('Could not get data: ' . mysqli_error($db));
    } 
    else {
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
    }
}
else {
    ?>
    <a href="../view/new_profile.php" type="submit" name="new_user" id="new_user">Ajouter un utilisateur</a> 
    <?php
    include "../model/db_users_list.php";
}
?>
