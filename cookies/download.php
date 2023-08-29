<?php
require "generic.php";
if (isset($_GET['file']) && !empty($_GET['file'])) {
    $filePath = "./upload/" . $_GET['file'];
    if (file_exists($filePath)){
        header("Content-Type: application/octet-stream");  /** Indique que le contenu du fichier est de type binaire et que le navigateur doit traite le fichier comme un téléchargement plutôt que de tenter de l'afficher dans le navigateur */
        header("Content-Disposition: attachment; filename=" . basename($filePath));
        header("Content-Length: " . filesize($filePath));
        readfile($filePath);
    }else{
        echo "Le fichier n'existe pas";
    }
}