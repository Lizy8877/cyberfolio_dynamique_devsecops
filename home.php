<?php
session_start();

if (isset($_SESSION['login_session']) && isset($_SESSION['prenom_session']) && isset($_SESSION['id_session']) && isset($_SESSION['nom_session'])) {
    $login = $_SESSION['login_session'];
    $id = $_SESSION['id_session'];
}
else {
    header('Location: login.php');
}

require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login-info.css">
</head>
<body>
    <header>
        <div>
            <p class="info-login">Vous êtes connecté en tant que : <b><?php echo $_SESSION['prenom_session'] . " " . $_SESSION['nom_session']; ?></b></p>
            <a href="logout.php" class="logout-button"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <div>
            <img src="image/photo.png" alt="tête">
            <br> <br> <br>
            <p class="name">Michel Emcé</p>
            <br>
            <p class="descript">Découvrez les différents projets réalisés par un <br> développeur web Full Stack à Paris
            </p>
        </div>
        <br><br>
        <nav>
            <a href="#about">À Propos</a>
            <a href="#projets">Projets</a>
            <a href="contact.php"><i class="fa-solid fa-square-arrow-up-right"></i>&nbsp;&nbsp;&nbsp;Contact</a>
        </nav>
    </header>

    <div class="about" id="about">
        <div>
            <p class="center">Développeur Full Stack, diplômé en ingénierie logicielle de Flatiron School (New York),
                j'ai acquis une solide expertise en programmation, architecture logicielle et gestion de projet. J'ai eu
                l'occasion de travailler sur des projets variés dans des secteurs tels que l’e-commerce, la finance et
                la santé. Mon expérience inclut la conception d'interfaces utilisateur dynamiques, le développement
                d'API performantes et la mise en place d'architectures back-end fiables.</p>
            <br>

            <ul><strong>
                    <p class="competence">Compétences :</p>
                </strong>
                <li><strong>Langages :</strong> JavaScript, Python, Ruby, SQL</li>
                <li><strong>Front-End :</strong> React, Vue.js, HTML/CSS, Bootstrap</li>
                <li><strong>Back-End :</strong> Node.js, Ruby on Rails, Django, Express.js</li>
                <li><strong>Base de données :</strong> PostgreSQL, MongoDB</li>
                <li><strong>Outils :</strong> Git, Docker, Webpack, CI/CD</li>
                <li><strong>Méthodologies :</strong> Agile, Scrum, gestion de projet</li>
            </ul>
            <br>
            <p class="center">Passionné par les nouvelles technologies, je cherche à allier compétences techniques et
                sens du relationnel pour apporter une réelle valeur ajoutée à chaque projet.</p>
        </div>
    </div>

    <div class="projets" id="projets">
        <div class="card">
            <div class="card-content">
                <img src="image/icons-projets/e-commerce.jpg" class="card-logo">
                <div class="card-text">
                    <h3 class="card-title">Plateforme e-commerce</h3>
                    <p class="card-description">Plateforme e-commerce pour parcourir, ajouter au panier et commander de
                        manière sécurisée.
                    </p>
                </div>
            </div>
            <a href="projets.php?id=0">Voir</a>
        </div>

        <div class="card">
            <div class="card-content">
                <img src="image/icons-projets/app-gestion-tache.jpg" class="card-logo">
                <div class="card-text">
                    <h3 class="card-title">App. de gestion de tâches collaboratives</h3>
                    <p class="card-description">Application web collaborative pour suivre et organiser les projets
                        d’équipe.</p>
                </div>
            </div>
            <a href="projets.php?id=1">Voir</a>
        </div>

        <div class="card">
            <div class="card-content">
                <img src="image/icons-projets/plat-social-media.jpg" class="card-logo">
                <div class="card-text">
                    <h3 class="card-title">Plateforme de réseau social</h3>
                    <p class="card-description">Réseau social permettant aux utilisateurs de se connecter, partager du
                        contenu etc...</p>
                </div>
            </div>
            <a href="projets.php?id=2">Voir</a>
        </div>

        <div class="card">
            <div class="card-content">
                <img src="image/icons-projets/book-nook.jpg" class="card-logo">
                <div class="card-text">
                    <h3 class="card-title">Book Nook</h3>
                    <p class="card-description">Gestionnaire de bibliothèque en ligne pour lecteurs.</p>
                </div>
            </div>
            <a href="projets.php?id=3">Voir</a>
        </div>

        <div class="card">
            <div class="card-content">
                <img src="image/icons-projets/artspace.jpg" class="card-logo">
                <div class="card-text">
                    <h3 class="card-title">ArtSpace</h3>
                    <p class="card-description">Galerie en ligne pour artistes et collectionneurs.</p>
                </div>
            </div>
            <a href="projets.php?id=4">Voir</a>
        </div>
    </div>

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