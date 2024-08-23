<?php

namespace App\Controllers;

use App\Models\User;

class Admin
{
    public function index()
    {
        require RACINE . '/App/Views/adminView.php';
        require RACINE . '/App/Views/foot.php';
    }

    public function login()
    {

        $msg = null;

        if (isset($_POST['login'], $_POST['password'])) {
            $login = htmlspecialchars($_POST["login"]);
            $password = htmlspecialchars($_POST["password"]);

            // Validation des données
            if (empty($login) || empty($password)) {
                $msg = 'Veuillez saisir tous les champs';
            } else {
                // Authentification
                $userModel = new User();
                $user = $userModel->findBy(['login' => $login]);

                if ($user && isset($user[0])) {
                    $userPassword = $user[0]["password"];

                    if (password_verify($password, $userPassword)) {
                        // Connexion réussie
                        unset($user[0]['password']);
                        $_SESSION['admin'] = $user[0];

                        $msg = "Connexion réussie !";
                    } else {
                        $msg = 'Mot de passe incorrect';
                    }
                } else {
                    $msg = 'Utilisateur non trouvé';
                }
            }
            $_SESSION['msg'] = $msg;
            header("location: ../admin");
        }
    }

    public function uploadCv() {}

    public function deleteCv() {}
}
