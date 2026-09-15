<?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>

<?php
    try {
        // On vérifie si la méthode de requête est POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Vérification si 'login' et 'mdp' existent dans $_POST
            if (isset($_POST['login']) && isset($_POST['mdp'])) {
                $login = trim($_POST['login']);
                $mdp = trim($_POST['mdp']);
            } else {
                // Si les champs 'login' ou 'mdp' n'existent pas, on crée des erreurs
                $errors[] = 'Le login ou le mot de passe n\'ont pas été fournis.';
                $login = $mdp = ''; // On vide les variables pour éviter d'y accéder si elles sont absentes
            }

            $errors = [];
            if (empty($login)) { $errors[] = 'Le champ login est vide.'; }
            if (empty($mdp)) { $errors[] = 'Le champ mot de passe est vide.'; }

            if (empty($errors)) {
                // Préparer la requête SQL pour récupérer l'utilisateur avec ce login
                $sql = 'SELECT * FROM users WHERE login = :login';
                $stmt = $mysqlClient->prepare($sql);

                // Lier le paramètre :login
                $stmt->bindParam(':login', $login);

                // Exécuter la requête
                $stmt->execute();

                // Vérifier si l'utilisateur existe
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user && password_verify($mdp, $user['password'])) {
                    // Si le mot de passe est correct, on stocke les informations de la session
                    $_SESSION['id_session'] = $user['id'];
                    $_SESSION['login_session'] = $user['login'];
                    $_SESSION['prenom_session'] = $user['prenom'];
                    $_SESSION['nom_session'] = $user['nom'];

                    // Rediriger vers home.php
                    header('Location: home.php?id=' . $_SESSION['id_session']);
                    exit(); // Toujours ajouter un exit() après une redirection
                } else {
                    // Si le login ou le mot de passe est incorrect
                    echo '<p style="position: relative; left: 50%; transform: translate(-50%, 0); margin-top: 10px; font-weight: bold; background-color: #F43F3B; padding: 15px; width: fit-content; border-radius: 10px;">Le login ou le mot de passe est incorrect.</p>';
                }
            } else {
                // Affichage des erreurs s'il y en a
                foreach($errors as $error) {
                    echo '<p style="position: relative; left: 50%; transform: translate(-50%, 0); margin-top: 10px; font-weight: bold; background-color: #F43F3B; padding: 15px; width: fit-content; border-radius: 10px;">' . htmlspecialchars($error) . '</p>';
                }
            }
        }
    } catch (Exception $exception) {
        // Gestion des erreurs
        die('Erreur : ' . $exception->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap" rel="stylesheet">
    <title>Cyberfolio</title>
    <link rel="icon" href="image/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/faille.css">
</head>

<body>

    <h1>Connectez vous à votre compte pour accéder à mes projets.</h1>

    <form action="" method="post">
        <div class="field">
            <label for="login">Login</label>
            <input type="text" name="login" placeholder="Michou"/>
        </div>
        <div class="field">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" placeholder="***************"/>
        </div>
        <div>
            <input type="submit" value="Se connecter" class="submit">
            <a href="index.php" class="login">Créer un compte</a>
        </div>
    </form>

    <button id="reloadButton">Dernière vulnérabilité</button>
    <div id="output" style="display: none;"></div>

    <footer>
        <p class="copyright">&copy; <a href="https://www.linkedin.com/in/baptiste-aussant-7033b2259/"
                target="_blank">Baptiste AUSSANT</a>, Adel BOUSLAMA,&ensp;<a
                href="https://www.linkedin.com/in/alessandro-patti-76699632b/" target="_blank">Alessandro
                PATTI</a>,&ensp;<a href="https://www.linkedin.com/in/elisabethriviere/" target="_blank">Elisabeth
                RIVIÈRE</a></p>
    </footer>

    <script src="https://kit.fontawesome.com/cb9da243d3.js" crossorigin="anonymous"></script>
    <script src="js/chargement-faille.js"></script>

</body>

</html>