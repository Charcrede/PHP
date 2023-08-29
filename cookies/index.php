<?php
require "generic.php";
require "home.phtml";
// /**
//  * Fonction qui démarre une session côté serveur
//  */
// session_start();
// if (empty($_SESSION["nom"])) {
//     $_SESSION["nom"] = "John Doe";
// }
// pr($_SESSION);
//  echo"<p> Hello {$_SESSION['nom']}</p>";
// // setcookie("school", "highfive", time() + 10);
// pr($_COOKIE);

// /**
//  * Une superglobale est une variable pré-définie qui stocke des infos et des données importantes accessibles depuis n'importe où dans le script sans avoir besoin de la déclarer explicitement comme une variable classique
//  */
// # fonction qui dis où sont stocké les session
// echo "session Path = " . session_save_path(); 
// #Fonction qui renvoie l'id de la session actuelle;
// echo "<br>";
// echo session_id();
// $serializedData = 'nom|s:8:"John Doe"';
// $data = unserialize($serializedData);
// pr($data);