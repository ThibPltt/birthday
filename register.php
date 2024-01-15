<?php
    $host = "e-srv-lamp.univ-lemans.fr";
    $user = "e2302875";
    $database = "e2302875";
    $password = "Raq156mx";
    $connexion = new mysqli($host,$user,$password,$database);

    $query = "INSERT INTO 'birthday-guests' VALUES ()";
    $connexion->query($query);
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nom = $_POST['nom'];
    $Nombre = $_POST['nombre'];

    
    $sql = "INSERT INTO  `birthday-guests` (`Nom`, `Nombre`) VALUES ('$Nom', '$Nombre')";

    if ($connexion->query($sql) == TRUE) {
        echo "New guest invited !";
    }
        else {
            echo "Error: ".$sql . "<br>" . $connexion->error;
        }
    }

    $connexion->close();
    ?>