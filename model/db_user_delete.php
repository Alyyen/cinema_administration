<?php
include "../model/db_connection.php"; // Connexion à la database

$id = $_GET['id_perso'];

if(isset($_POST['delete'])){
    $id2 = $_POST['id'];
    $request = "DELETE FROM `fiche_personne` WHERE id_perso='$id2'";// Récupère datas de la db

    if(mysqli_query($db, $request)){
        echo "Utilisateur supprimé";
        mysqli_close($db); // Close connection
        header("location:homepage.php"); 
        exit;
    }
    else 
        die('Could not get data: ' . mysqli_error($db));
}
?>
