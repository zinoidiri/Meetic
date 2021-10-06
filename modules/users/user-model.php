<?php
$db = connectDB("localhost", "my_meetic", "zino", "jjjj");

function createUser() {
  global $db;

  $sql = "INSERT INTO membres (nom, prenom, email, date_de_naissance, mdp, genres, loisirs, ville)
    VALUES (:nom, :prenom, :email, :date_de_naissance, :mdp, :genres, :loisirs, :ville)";
  
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email = $_POST["email"];
  $date_de_naissance = $_POST["date_de_naissance"];
  $mdp = $_POST["mdp"];
  $genres = $_POST["genres"];
  $loisirs = $_POST["loisirs"];
  $ville = $_POST["ville"];

  $statement = $db->prepare($sql);
  $statement->bindParam(":nom", $nom, PDO::PARAM_STR);
  $statement->bindParam(":prenom", $prenom, PDO::PARAM_STR);
  $statement->bindParam(":email", $email, PDO::PARAM_STR);
  $statement->bindParam(":date_de_naissance", $date_de_naissance, PDO::PARAM_STR);
  $statement->bindParam(":mdp", $mdp, PDO::PARAM_STR);
  $statement->bindParam(":genres", $genres, PDO::PARAM_STR);
  $statement->bindParam(":loisirs", $loisirs, PDO::PARAM_STR);
  $statement->bindParam(":ville", $ville, PDO::PARAM_STR);
  $res = $statement->execute();
  $msg_crud = ($res === true) ? "insertion ok" : "soucis à l'insertion";
  // header("Location: index.php");
}

function loginUser(){
  global $db;
  if(isset($_GET['mdp']) && isset($_GET['email'])){


    $email = $_GET["email"] ;
    $password = $_GET["mdp"] ;
    $sql = "SELECT * FROM membres WHERE email = :email and mdp = :mdp";
    $statement = $db->prepare($sql);
    $statement->bindParam(":email", $email, PDO::PARAM_STR);
    $statement->bindParam(":mdp", $password, PDO::PARAM_STR);
    $res = $statement->execute();

    $row = $statement->fetch(PDO::FETCH_OBJ);
    if($row == true){
    
      $_SESSION['email'] = $row->email;
      $_SESSION['nom'] = $row->nom;
       
      echo $_SESSION['email'];
      header("Location: accueil.php");

    }
  }else{
    $message = "Mot de passe incorrect ou nom d'utilisateur incorrect.";
  }
}
?>
