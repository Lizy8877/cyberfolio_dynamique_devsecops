<?php
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
?>
<?php
    try {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = trim($_POST['nom']);
            $prenom = trim($_POST['prenom']);
            $login = trim($_POST['login']);
            $mdp = trim($_POST['mdp']);

            $errors = [];
            if (empty($nom)) { $errors[] = 'Le champ nom est vide.'; }
            if (empty($prenom)) { $errors[] = 'Le champ prénom est vide.'; }
            if (empty($login)) { $errors[] = 'Le champ login est vide.'; }
            if (empty($mdp)) { $errors[] = 'Le champ mot de passe est vide.'; }

            if (empty($errors)) {
                // Vérifier si le login existe déjà
                $checkSql = 'SELECT COUNT(*) FROM users WHERE login = :login';
                $checkStmt = $mysqlClient->prepare($checkSql);
                $checkStmt->bindParam(':login', $login);
                $checkStmt->execute();
                $loginExists = $checkStmt->fetchColumn(); // Récupère le nombre de résultats

                if ($loginExists > 0) {
                    $errors[] = 'Ce login existe déjà. Veuillez en choisir un autre.';
                } else {
                    // Hacher le mot de passe avant de l'insérer
                    $hashedPassword = password_hash($mdp, PASSWORD_DEFAULT);

                    // Insérer les données si tout est valide
                    $sql = 'INSERT INTO users (nom, prenom, login, password) 
                            VALUES (:nom, :prenom, :login, :mdp)';
                    $stmt = $mysqlClient->prepare($sql);

                    $stmt->bindParam(':nom', $nom);
                    $stmt->bindParam(':prenom', $prenom);
                    $stmt->bindParam(':login', $login);
                    $stmt->bindParam(':mdp', $hashedPassword);

                    $stmt->execute();
                    header("Location: login.php");
                    exit(); // Toujours terminer après une redirection
                }
            }
            
            // Afficher les erreurs si elles existent
            foreach($errors as $error) {
                echo '<p style="position: relative; left: 50%; transform: translate(-50%, 0); margin-top: 10px; font-weight: bold; background-color: #F43F3B; padding: 15px; width: fit-content; border-radius: 10px;">' . htmlspecialchars($error) . '</p>';
            }
        }
    } catch (Exception $exception) {
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
</head>

<body>

    <h1>Créez votre compte pour accéder à mes projets.</h1>

    <form action="" method="POST">
        <div class="field">
            <label for="nom">Nom</label>
            <input type="text" name="nom" placeholder="Emcé"/>
        </div>
        <div class="field">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" placeholder="Michel"/>
        </div>
        <div class="field">
            <label for="login">Login</label>
            <input type="text" name="login" placeholder="Michou"/>
        </div>
        <div class="field">
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" placeholder="***************"/>
        </div>
        <div class="button-log">
            <input type="submit" value="Créer" class="submit">
            <a href="login.php" class="login">Login</a>
        </div>
    </form>

    <footer>
        <p class="copyright">&copy; <a href="https://www.linkedin.com/in/baptiste-aussant-7033b2259/"
                target="_blank">Baptiste AUSSANT</a>, Adel BOUSLAMA,&ensp;<a
                href="https://www.linkedin.com/in/alessandro-patti-76699632b/" target="_blank">Alessandro
                PATTI</a>,&ensp;<a href="https://www.linkedin.com/in/elisabethriviere/" target="_blank">Elisabeth
                RIVIÈRE</a></p>
    </footer>

    <script src="https://kit.fontawesome.com/cb9da243d3.js" crossorigin="anonymous"></script>

</body>

</html>