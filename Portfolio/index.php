
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Gaëlle EL KADAOUI</title>
    <script defer src="scripts/main.js"></script>
    <script src="https://kit.fontawesome.com/07dfb61637.js"></script>
</head>

<body>
    <?php if(isset($_GET['confirm'])): ?>
    <div class="alert">"Votre message est envoyé"</div>
    <?php endif; ?>

<div id="main">
        <header id="welcome-section">
            <div class="moon"></div>
            <div class="wrapper">
                <div class="text">
                    <div class="line">
                        <p>Gaelle</p>
                        <p>EL KADAOUI</p>
                    </div>
                    <div class="line">
                        <p>EL KADAOUI</p>
                        <p>Gaelle</p>
                    </div>
                </div>
            </div>
            <div class="taping">Web developpeuse</div>
            <div class="stars"></div>
            <div class="forest"></div>
            <div class="silhouette"></div>
        </header>
        <div class="triangle"></div>
    </div>

    <div id="home">
        <div id="about">
            <div class="card">
                <h1 class="cardTitle">Qui suis-je ?</h1>
                <img src="img/me.jpg" alt="portrait Gaëlle">
                <div class="cardText">
                    <p>Après diverses expériences professionnelles, je suis revenu à ma première passion l'informatique !
                        En formation à l'Access Code School, je découvre le monde merveilleux du développement web !</p>
                    <p>J'ai exercé dans le secrétariat dans le milieu associatif, dans la relève de compteurs électriques /
                        gaz,
                        l'outil informatique ne m'a jamais vraiment quitté.
                        J'utilisai la suite bureautique de Windows : word, excel, powerpoint, etc.
                        Mais le développement web m'a fait découvrir un univers immense de connaissances !
                        Et il abreuve mon savoir chaque jour un peu plus !</p>
                    <p>Après un petit scroll, vous pourrez voir mes projets.
                        Ils ne sont pas très nombreux mais je travaille chaque jour pour y remédier !</p>
                </div>
                <a class="btn-grad" href="img/Gaelle%20EL%20KADAOUI.pdf" target="_blank">Télécharger mon CV</a>
                <h2 class="knowingTitle">Petit aperçu non-exhaustif de mes connaissances</h2>
                <i class="fab fa-html5"></i>
                <i class="fab fa-css3-alt"></i>
                <i class="fab fa-php"></i>
                <i class="fab fa-github-alt"></i>
                <i class="fas fa-database"></i>
                <i class="fab fa-js"></i>
            </div>
        </div>

        <div id="myProjects">
            <div class="projectCard">
                <div class="cardTitle">
                    Site d'un village
                    <i class="fab fa-github-alt fa-xs"></i>
                    <i class="fab fa-html5 fa-xs"></i>
                    <i class="fab fa-css3-alt fa-xs"></i>
                </div>
                <img alt="image projet site de Montigny" src="img/Montigny.jpg"/>
                <div class="cardText">
                    <p>Mon premier essai de création de site statique présentant un petit village Haut-Saônois.</p>
                    <a href="">Visitez en direct</a>
                    <a href="https://github.com/GaelleEK/SiteMontigny">Voir sur GitHub</a>
                </div>
            </div>
            <div class="projectCard">
                <div class="cardTitle">
                    Blog avec accès admin
                    <i class="fab fa-github-alt fa-xs"></i>
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-php"></i>
                </div>
                <img alt="image blog" src="img/blog.jpg"/>
                <div class="cardText">
                    <p>Blog avec interface d'administration pour ajouter modifier ou supprimer les articles.</p>
                    <a href="">Visitez en direct</a>
                    <a href="https://github.com/GaelleEK/TP-blog">Voir sur GitHub</a>
                </div>
            </div>
        </div>
    </div>
    <div class="triangle2"></div>

    <section id="contact-me">
        <a class="js-modal" href="#modal">Envoyez moi un mail !</a>
        <div id="modal" class="modal" aria-hidden="false" style="display: none">
            <div class="modal-wrapper js-modal-stop">
                <button class="js-modal-close">Fermer</button>
                <form id="contact-form" class="contact-me modal-wrapper" action="index.php" method="post">

                    <input type="text" id="name" name="user_name" placeholder="Nom" required>


                    <input type="email" id="mail" name="user_mail" placeholder="Mail" required>


                    <textarea id="msg" name="user_message" placeholder="Message" required></textarea>

                    <input id="submit" class="button" name="submit" type="submit" value="Envoyer">

                </form>
            </div>
        </div>
    </section>
    <div class="social">
        <a class="fa fa-github" href="https://github.com/GaelleEK"></a>
        <a class="fa fa-linkedin" href="https://linkedin.com/in/gaëlle-el-kadaoui"></a>
    </div>
    <footer>
        <p>2020</p>
        <p>crée par Gaëlle EL KADAOUI</p>
    </footer>
</body>