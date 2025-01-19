<?php

function addUser(PDO $pdo, string $pseudo, string $email, string $mot_de_passe): bool
{
    $query = $pdo->prepare("INSERT INTO utilisateurs (pseudo, email, mot_de_passe, credits) VALUES (:pseudo, :email, :mot_de_passe, :credits)");

    $mot_de_passe = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    $query->bindValue(':pseudo', $pseudo);
    $query->bindValue(':email', $email);
    $query->bindValue(':mot_de_passe', $mot_de_passe);
    $query->bindValue(':credits', 20);

    return $query->execute();
}



function verifyUSer(PDO $pdo, $utilisateur): array | bool
{
    $errors = [];

    if (isset($utilisateur["pseudo"])) {
        if ($utilisateur["pseudo"] === "") {
            $errors["pseudo"] = "Le champ pseudo est obligatoire";
        }
    } else {
        $errors["pseudo"] = "Le champ pseudo n'a pas été envoyé";
    }

    if (isset($utilisateur["mot_de_passe"])) {
        if (strlen($utilisateur["mot_de_passe"]) < 8) {
            $errors["mot_de_passe"] = "Le mot de passe doit faire au moins 8 caractères";
        }
    } else {
        $errors["mot_de_passe"] = "Le champ mot_de_passe n'a pas été envoyé";
    }

    if (isset($utilisateur["mot_de_passe"]) && isset($utilisateur["confirm_mot_de_passe"])) {
        if ($utilisateur["mot_de_passe"] != $utilisateur["confirm_mot_de_passe"]) {
            $errors["confirm_mot_de_passe"] = "Les mots de passe ne correspondent pas";
        }
    }

    if (isset($utilisateur["email"])) {
        if ($utilisateur["email"] === "") {
            $errors["email"] = "Le champ email est obligatoire";
        } else {
            if (!filter_var($utilisateur["email"], FILTER_VALIDATE_EMAIL)) {
                $errors["email"] = "Le format d'email n'est pas respecté";
            } else {
                $stmt = $pdo->prepare("SELECT COUNT(*) FROM utilisateurs WHERE email = :email");
                $stmt->bindValue(":email", $utilisateur["email"]);
                $stmt->execute();
                $count = $stmt->fetchColumn();

                if ($count > 0) {
                    $errors["email"] = "Cet email est déjà utilisé.";
                }
            }
        }
    } else {
        $errors["email"] = "Le champ email n'a pas été envoyé";
    }

    if (count($errors)) {
        return $errors;
    } else {
        return true;
    }
}

function verifyUserLoginPassword(PDO $pdo, string $email, string $mot_de_passe): bool | array
{
    $query = $pdo->prepare("SELECT id, pseudo, email, mot_de_passe, credits FROM utilisateurs WHERE email = :email");
    $query->bindValue(":email", $email);
    $query->execute();
    $utilisateur = $query->fetch(PDO::FETCH_ASSOC);

    if ($utilisateur && password_verify($mot_de_passe, $utilisateur["mot_de_passe"])) {
        return $utilisateur;
    } else {
        return false;
    }
}
