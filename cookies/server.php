<?php
require "generic.php";
// pr($_FILES);
# L'utilisateur à uploader un fichier
// if (isset($_POST['submit']) && isset($_FILES['photo_profile'])) {
$fileName = $_FILES['photo_profile']['name'];
$tmpDir = $_FILES['photo_profile']['tmp_name'];
$fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
$allowedFiles = ['jpeg', 'jpg', 'png', 'webp'];
/**Fonction qui sauvegarde à l'endroit désirer */
if (in_array($fileExtension, $allowedFiles)) {
    move_uploaded_file($tmpDir, "./upload/img-upload-" . uniqid() . "." . $fileExtension);
    echo "bon fichier";
    if ($_FILES['photo_profile']['error'] === 0) {
        if ($_FILES['photo_profile']['size'] === 0) {
            echo "masta";
        }
    }else{
        echo "une erreur a été détectée";
    }
} else {
    echo "Fichier {$fileExtension} nom autorisés !";
    echo "Formats autorisés: " . implode(", ", $allowedFiles);
}

// }
// else{
//     // echo "pas de fichier uploadé";
//     // rediriger ce dernier sur la page du formulaire
//     header('Location:index.php');
//     exit;
// }
#récupérer les informations du fichier (nom, extension, chemin)
# sauvegarder le fichier sur le serveur