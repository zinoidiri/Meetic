<?php
    session_start();
    var_dump(session_start());
    var_dump(!isset($_SESSION));
    if(!isset($_SESSION)){
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRUD 1</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/styles.css">

    </head>
    <body>
        <h1 class="title">
            <a href="index.php">Meetic</a>
        </h1>


<h1>Accueil</h1>
<p>Bienvenue <?php echo $_SESSION['name']?></p>
<?php include "inc/footer.php"; ?>