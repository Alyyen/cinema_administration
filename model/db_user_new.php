
<?php

include "../model/db_connection.php"; // Connexion à la database

// Ajout
if(isset($_POST['submit'])){

    $lastName = $_POST['nom'];
    $firstName = $_POST['prenom'];
    $email = $_POST['email'];
    $birth_date = $_POST['date_naissance'];
    $city_code = $_POST['cpostal'];
    $city = $_POST['ville'];
    
    $add = mysqli_query($db, "INSERT INTO fiche_personne (nom, prenom, email, date_naissance, ville, cpostal) 
    VALUES ('$lastName', '$firstName', '$email', '$birth_date', 
    '$city', '$city_code')"); // Ajoute datas de la db

    if(!$add){
        die('Could not get data: ' . mysqli_error($db));
    }
    else {
        mysqli_close($db); // Close connection
        header("location:homepagee.php"); 
        exit;
    }
}
?>