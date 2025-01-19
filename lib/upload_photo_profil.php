<?php

session_start();

// ajout photo de profil
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["photo"])) {
    $uploadDir = "media/profils/";
    $fileName = basename($_FILES["photo"]["name"]);
    $uploadFilePath = $uploadDir . $fileName;

    $allowedTypes = ['image/jpeg', 'image/png', 'image.jpg'];
    if (!in_array($_FILES["photo"]["type"], $allowedTypes)) {
        $_SESSION["upload_error"] = "Seules les images JPG et PNG sont autorisées.";
        header("Location : pageutilisateur.php");
        exit;
    }

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $uploadFilePath)) {
        $_SESSION["utilisateur"]["photo"] = $uploadFilePath;
        $_SESSION["upload_success"] = "Photo de profil mise à jour avec succès.";
    } else {
        $_SESSION["upload_error"] = "Erreur lors du téléchargement.";
    }

    header("Location: pageutilisateur.php");
    exit;
}
