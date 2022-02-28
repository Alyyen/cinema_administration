
<?php

include "../model/db_connection.php"; // Connexion à la database

$id = $_GET['id_perso'];

$query = mysqli_query($db, "SELECT * FROM `fiche_personne` WHERE id_perso='$id'"); // Récupère datas de la db

if ($info = mysqli_fetch_array($query)){
    ?>
    <label for="nom">Nom</label><input type="text" name="nom" value="<?php echo $info['nom'];?>"/><br>
    <label for="prenom">Prénom</label><input type="text" name="prenom" value="<?php echo $info['prenom'];?>"/><br>
    <label for="email">Email</label><input type="text" name="email" value="<?php echo $info['email'];?>"/></td><br>
    <label for="date_naissance">Date de naissance</label><input type="date" name="date_naissance" value="<?php echo $info['date_naissance'];?>"/><br>
    <label for="cpostal">Code Postal</label><input type="text" name="cpostal" value="<?php echo $info['cpostal']?>"/><br>
    <label for="ville">Ville</label><input type="text" name="ville" value="<?php echo $info['ville'];?>"/><br>
    <?php
}

// Modification
if(isset($_POST['submit'])){

    $id = $_POST['id'];
    $lastName = $_POST['nom'];
    $firstName = $_POST['prenom'];
    $email = $_POST['email'];
    $birth_date = $_POST['date_naissance'];
    $city_code = $_POST['cpostal'];
    $city = $_POST['ville'];
    
    $edit = mysqli_query($db, "UPDATE fiche_personne SET nom='$lastName', 
    prenom='$firstName', email='$email', date_naissance='$birth_date', 
    ville='$city', cpostal='$city_code' WHERE id_perso='$id'"); // Modifie datas de la db

    if(!$edit){
        die('Could not get data: ' . mysqli_error($db));
    }
    else {
        mysqli_close($db); // Close connection
        header("location:edit_profile.php?id_perso=$id"); 
        exit;
    }
}
?>