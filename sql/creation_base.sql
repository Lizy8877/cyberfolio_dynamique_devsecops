-- Database Creation
CREATE DATABASE `liste_projets`;
USE `liste_projets`;

-- Table Creation
CREATE TABLE `projets` (
  `id` INT PRIMARY KEY AUTO_INCREMENT
  , `h1` TEXT
  , `img_1` TEXT
  , `h2_1` TEXT
  , `p_1` TEXT
  , `h2_2` TEXT
  , `p_2` TEXT
  , `img_2` TEXT
);

INSERT INTO
  `projets` (`h1`, `img_1`, `h2_1`, `p_1`, `h2_2`, `p_2`, `img_2`)
VALUES
  (
    'La création d\'une plateforme e-commerce pour la vente de produits !'
    , 'image/projets/e-commerce/1.jpg'
    , 'Les enjeux clés d\'une plateforme e-commerce dans le commerce moderne'
    , 'Les plateformes e-commerce jouent un rôle central dans le commerce moderne, offrant aux entreprises
                    une
                    vitrine en ligne accessible 24/7. Les enjeux majeurs incluent la création d\'une expérience
                    utilisateur fluide, essentielle pour convertir les visiteurs en clients fidèles. La
                    sécurité
                        des transactions est primordiale pour protéger les données sensibles et instaurer la
                    confiance.La
                    gestion efficace des stocks, des commandes et de la logistique est également cruciale pour garantir
                    un
                    service de qualité. Enfin, l\'intégration de stratégies de marketing numérique, comme le
                    référencement et les campagnes ciblées, est indispensable pour attirer et fidéliser une
                    clientèle dans
                    un marché compétitif.'
    , 'Création d\'une plateforme e-commerce : un projet idéal pour un développeur web full stack !'
    , 'Pour le front-end, la plateforme peut être développée avec des technologies modernes comme
                    React,
                    Angular
                    ou Vue.js. Ces frameworks permettent de concevoir une interface utilisateur intuitive et responsive,
                    essentielle pour offrir une expérience utilisateur optimale. On peut y inclure des fonctionnalités
                    comme
                    des pages produits dynamiques, un panier interactif et des formulaires sécurisés pour les
                    utilisateurs.
                Côté back-end, l\'utilisation de Node.js, Django ou Laravel est idéale pour gérer la logique
                    métier. La
                    création d\'une API REST ou GraphQL permettra de structurer les échanges de données entre le client
                    et le
                    serveur. Une attention particulière doit être portée à la gestion des utilisateurs, avec
                    l\'authentification et la sécurisation des données sensibles.
                La base de données, qu\'elle soit relationnelle (MySQL, PostgreSQL) ou non relationnelle (MongoDB),
                    stockera les informations clés : produits, utilisateurs, commandes, etc. L\'intégration de solutions
                    de
                    paiement, comme Stripe ou PayPal, est également essentielle pour simuler des transactions réelles.
                Enfin, le déploiement de la plateforme sur un service comme Heroku, Vercel ou AWS met en avant votre
                    capacité à gérer l\'hébergement et l\'optimisation des performances.'
    , 'image/projets/e-commerce/2.jpg'
  )
  , (
    'Création d\'un gestionnaire de tâches collaboratives !'
    , 'image/projets/taches-collab/1.jpg'
    , 'Les enjeux clés d\'un gestionnaire de tâches collaboratives'
    , 'Gestion de la communication et de la coordination.
                    Une communication fluide est cruciale pour éviter erreurs, retards et conflits dans un projet
                        collaboratif. Si les membres ignorent
                    les priorités et avancées des autres, le projet se désorganise. Le gestionnaire doit garantir une
                    communication claire,
                    centralisée et en temps réel.
                    Suivi de la progression des tâches
                    Un suivi constant de l\'avancement est crucial pour éviter les retards ou les oublis. Il
                    permet
                    d\'identifier les blocages,
                    d\'ajuster les priorités et de s\'assurer que les objectifs
                    sont atteints dans les délais. Cela offre également une vue d\'ensemble motivante pour l\'équipe. Gestion des priorités et des délais
                    La gestion des priorités et des délais est essentielle pour éviter les conflits et garantir le
                        respect
                        des échéances.
                    Une mauvaise gestion peut entraîner des échecs ou des tensions. Le gestionnaire doit s\'assurer que
                    les
                    tâches sont bien
                    priorisées et que les délais sont respectés.'
    , 'Création d\'un gestionnaire de tâches collaboratives : un projet idéal pour un développeur web full stack !'
    , 'Pour le front-end, la plateforme peut être construite avec des technologies
                    modernes comme React, Vue.js ou Svelte.
                    Ces frameworks offrent une interface utilisateur réactive
                    fluide et intuitive, ce qui est essentiel pour un gestionnaire de tâches collaboratives. On pourra
                    également intégrer par la suite des
                    fonctionnalités telles que, l\'ajout de listes de tâches dynamiques, ainsi que des tableaux Kandan.
                Côté back-end, des technologies comme Node.js avec Express, Django ou Laravel sont idéales
                    pour
                    gérer la logique métier de la plateforme.
                    La création d\'une API REST ou GraphQL
                    permettra de structurer et d\'optimiser les échanges de données entre le client et le serveur. On
                    doit
                    donc également prendre en compte,
                    la gestion des utilisateurs avec également le suivi des tâches etc...
                Quant à la base de données, il est possible d\'opter pour des solutions relationnelles comme
                    PostgreSQL
                    ou MySQL si des relations complexes
                    entre les données (utilisateurs, tâches, projets) sont nécessaires.
                    Pour des besoins plus flexibles, une base de données non relationnelle comme MongoDB peut être
                    utilisée.
                Pour ce qui est du déploiement de la plateforme, nous pouvons utiliser des services comme
                    Vercel,
                    Heroku,
                    ou AWS.'
    , 'image/projets/taches-collab/2.jpg'
  )
  , (
    'Création d\'un réseau social !'
    , 'image/projets/social-media/4.jpg'
    , 'Les enjeux clés d\'un réseau social'
    , 'La gestion de la confidentialité / sécurité des données
                    Les utilisateurs partagent des informations sensibles sur les réseaux sociaux, les rendant vulnérables aux cyberattaques.
                    Assurer la confidentialité des données est essentiel pour maintenir leur confiance. Des politiques de confidentialité
                    claires et transparentes sont nécessaires pour expliquer la collecte et l\'utilisation des données, renforçant ainsi la crédibilité des plateformes.
                    Modération des contenus
                    Les réseaux sociaux doivent lutter contre la désinformation, le discours de haine et le harcèlement en ligne.
                    Un équilibre entre liberté d\'expression et régulation est crucial pour garantir un environnement sûr et respectueux.
                    Croissance et engagement des utilisateurs
                    Attirer de nouveaux utilisateurs et maintenir leur engagement à
                    long terme sont essentiels. Cela passe par des fonctionnalités innovantes,
                    des recommandations pertinentes et des communautés actives.'
    , 'Création d\'un réseau social : un projet idéal pour un développeur web
                    full stack !'
    , 'Pour le front-end, la plateforme peut être construite avec des technologies
                    modernes comme React, Vue.js ou Svelte.
                    Ces frameworks offrent une interface utilisateur réactive
                    fluide et intuitive, ce qui est essentiel pour un gestionnaire de tâches collaboratives. On pourra
                    également intégrer par la suite des
                    fonctionnalités telles que, l\'ajout de listes de tâches dynamiques, ainsi que des tableaux Kandan.
                Côté back-end, des technologies comme Node.js avec Express, Django ou Laravel sont idéales
                    pour
                    gérer la logique métier de la plateforme.
                    La création d\'une API REST ou GraphQL
                    permettra de structurer et d\'optimiser les échanges de données entre le client et le serveur. On
                    doit
                    donc également prendre en compte,
                    la gestion des utilisateurs avec également le suivi des tâches etc...
                Quant à la base de données, il est possible d\'opter pour des solutions relationnelles comme
                    PostgreSQL
                    ou MySQL si des relations complexes
                    entre les données (utilisateurs, tâches, projets) sont nécessaires.
                    Pour des besoins plus flexibles, une base de données non relationnelle comme MongoDB peut être
                    utilisée.
                Pour ce qui est du déploiement de la plateforme, nous pouvons utiliser des services comme
                    Vercel,
                    Heroku,
                    ou AWS.'
    , 'image/projets/social-media/1.jpg'
  )
  , (
    'La création d\'un Book Nook pour la gestion de lecture !'
    , 'image/projets/book-nook/3.jpg'
    , 'Un Book Nook numérique : allier créativité et compétences techniques'
    , 'Un book nook est une miniature immersive nichée entre les livres d\'une étagère, souvent conçue comme
                    une
                    petite scène ou un univers. Pour un développeur web full stack, intégrer un book nook dans un
                    portfolio
                    en ligne offre une manière originale de montrer ses compétences.
                    L\'idée est de concevoir un book nook numérique interactif, combinant la créativité artistique
                    avec les
                    technologies web. Cette expérience pourrait se présenter comme une interface en 3D ou un micro-monde
                    interactif visible dans un navigateur. À l\'aide de WebGL et Three.js, le développeur peut modéliser
                    un
                    espace en 3D, par exemple un bureau futuriste, une bibliothèque cyberpunk ou une ruelle mystique
                    représentant son univers professionnel. L\'ajout d\'effets dynamiques (éclairage, animations) et
                    d\'éléments interactifs (comme des objets cliquables ou des messages cachés) mettra en valeur ses
                    compétences techniques.
                    Sur le plan backend, des outils comme Node.js ou Django peuvent alimenter des fonctionnalités
                    avancées,
                    telles que des données en temps réel ou une connexion API. Ce projet témoigne de la maîtrise du
                    design,
                    de la programmation front et back-end, et d\'une approche innovante.'
    , 'Les Compétences Mobilisées pour créer un Book Nook numérique'
    , 'La création d\'un book nook numérique met en lumière un large éventail de compétences techniques et
                    artistiques, essentielles pour un développeur web full stack.
                    En front-end, des outils comme HTML5, CSS3, et JavaScript sont utilisés pour structurer et
                    styliser
                    l\'interface. L\'intégration de bibliothèques comme Three.js ou WebGL permet de créer des
                    environnements
                    3D immersifs et interactifs, renforçant l\'expérience utilisateur. Des animations, effets lumineux ou
                    éléments cliquables témoignent d\'une maîtrise avancée du design interactif.
                    Côté back-end, des frameworks comme Node.js, Express, ou Django permettent de gérer les
                    fonctionnalités
                    dynamiques, comme le stockage de données ou l\'interaction en temps réel. Une API peut être intégrée
                    pour
                    enrichir le contenu, tandis que des bases de données comme MongoDB ou PostgreSQL assurent une
                    gestion
                    robuste des données.
                    Enfin, la gestion de projet et une approche créative sont indispensables pour conceptualiser une
                    miniature numérique unique, équilibrant esthétisme et performance. Ce projet illustre la polyvalence
                    et
                    le savoir-faire d\'un développeur web full stack.'
    , 'image/projets/book-nook/2.jpg'
  )
  , (
    'La création d\'une galerie en ligne pour les lecteurs experts !'
    , 'image/projets/art-space/2.jpg'
    , 'Créer un Artspace numérique : fusion entre créativité et compétences Web'
    , 'Un artspace est un espace numérique interactif dédié à la présentation d\'œuvres ou de projets
                    créatifs.
                    L\'artspace peut prendre la forme d\'une galerie virtuelle en 3D, accessible via un navigateur. Grâce
                    à
                    des technologies comme WebGL et Three.js, il est possible de modéliser des espaces immersifs, tels
                    qu\'une salle d\'exposition futuriste ou une forêt numérique animée, où chaque œuvre (ou projet)
                    devient
                    un point interactif. Des éléments comme des animations, des effets sonores et des lumières
                    dynamiques
                    renforcent l\'aspect immersif.
                    Sur le plan front-end, des compétences en HTML, CSS, JavaScript, et en design UX/UI sont mises en
                    œuvre
                    pour garantir une navigation intuitive et esthétique. Côté back-end, des frameworks comme
                    Node.js
                    ou
                    Ruby on Rails peuvent être utilisés pour gérer des fonctionnalités complexes, comme l\'ajout d\'œuvres
                    dynamiques ou des retours en temps réel via une API.
                    Un artspace bien conçu devient un atout puissant pour attirer l\'attention des recruteurs, démontrant
                    une
                    maîtrise des technologies modernes, une gestion de projet efficace et une capacité à allier
                    innovation
                    et esthétisme dans le développement web.'
    , 'Les compétences clés pour concevoir un Artspace numérique immersif'
    , 'La création d\'un artspace numérique mobilise un large éventail de compétences techniques et
                    créatives,
                    illustrant la polyvalence d\'un développeur web full stack.
                    En front-end, des outils comme HTML5, CSS3, et JavaScript sont essentiels pour structurer et
                    styliser
                    l\'interface. Des bibliothèques comme Three.js ou des technologies comme WebGL permettent de
                    concevoir
                    des environnements 3D immersifs et interactifs, avec des animations fluides et des effets
                    visuels
                    captivants. Une expertise en design UX/UI est également cruciale pour garantir une expérience
                    utilisateur intuitive.
                    Côté back-end, des frameworks comme Node.js, Express, ou Ruby on Rails permettent de gérer des
                    fonctionnalités avancées, telles que l\'ajout d\'œuvres dynamiques ou l\'interaction en temps
                        réel
                    via une
                    API. Une base de données, comme MongoDB ou PostgreSQL, assure une gestion efficace et évolutive du
                    contenu.
                    Enfin, la gestion de projet et une approche créative sont indispensables pour concevoir un artspace
                    unique, où l\'innovation technique rencontre l\'esthétique. Ce projet démontre la capacité à créer des
                    solutions web modernes, captivantes et fonctionnelles, un atout majeur pour tout développeur.'
    , 'image/projets/art-space/1.jpg'
  );

CREATE TABLE `users` (
  `id` INT PRIMARY KEY AUTO_INCREMENT
  , `nom` VARCHAR(20)
  , `prenom` VARCHAR(20)
  , `login` VARCHAR(50) UNIQUE
  , `password` VARCHAR(100)
);