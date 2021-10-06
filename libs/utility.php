<?php

/**
 * Fonction de connexion au SGBD via le driver PDO
 *
 * Se connecte à la base de données indiquée
 *
 * @param  string  $db base de données courante
 * @param  string  $user user de mysql
 * @param  string  $pass  mot de passe mysql
 * @return mixed   object représentant l'instance
 * de connexion pdo à la base de données si pas de soucis, void sinon.
 */
function connectDB($host, $db, $user, $pass) {
  try {
      // utilisation du prefix mysql:
      $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );
      $cnx = new PDO("mysql:host=$host;dbname=$db", $user, $pass, $options);
      return $cnx;

  } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      exit();
  }
}

