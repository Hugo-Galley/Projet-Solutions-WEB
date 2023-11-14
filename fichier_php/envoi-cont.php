<?php
    include("bdd.php");
    try{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $stmt = $bdd->prepare("INSERT INTO infos_contact (nom, prenom, message, email) VALUES (:nom, :prenom, :message, :email)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':email', $email);
    
    if($statu = $stmt->execute()){
        echo '<script type="text/javascript">
            alert("Le message a été envoyé!");
            window.location.href = "index.php";
          </script>';
    }
    else{
        echo '<script type="text/javascript">
            alert("Erreur!");
            window.location.href = "index.php";
          </script>';
    }
    
    }
    catch(PDOException $e){
        echo''. $e->getMessage();
    }
?>