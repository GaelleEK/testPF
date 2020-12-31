
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Test</title>
    <script defer src="scripts/main.js"></script>
</head>

<div id="main">
<!--    <div id="nav">-->
<!--        <div id="myLinks">-->
<!--            <a class="link" href="#">About</a>-->
<!--            <a class="link" href="#">Projects</a>-->
<!--            <a class="link" href="#">Contact</a>-->
<!--        </div>-->
<!--        <a id="btn-menu" href="javascript:void(0);" onclick="myFunction()">-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--            <span></span>-->
<!--        </a>-->
<!--        </div>-->
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
            <div class="stars"></div>
            <div class="forest"></div>
            <div class="silhouette"></div>
        </header>
        <div class="triangle"></div>
</div>

<div id="home">
    <div id="about">
        <div class="card">
            <div class="cardTitle">Qui suis-je ?</div>
            <div class="frameImg">
                <div class="imgMe"></div>
            </div>
            <div class="cardText">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio ducimus earum eos est eveniet magni minima, natus non numquam quaerat, quibusdam quis reprehenderit. Eos eum illum nihil nobis rerum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio ducimus earum eos est eveniet magni minima, natus non numquam quaerat, quibusdam quis reprehenderit. Eos eum illum nihil nobis rerum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio ducimus earum eos est eveniet magni minima, natus non numquam quaerat, quibusdam quis reprehenderit. Eos eum illum nihil nobis rerum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio ducimus earum eos est eveniet magni minima, natus non numquam quaerat, quibusdam quis reprehenderit. Eos eum illum nihil nobis rerum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio ducimus earum eos est eveniet magni minima, natus non numquam quaerat, quibusdam quis reprehenderit. Eos eum illum nihil nobis rerum.</p>
            </div>
        </div>
    </div>
    <div id="knowing">
        <div class="card">
        <h2 class="cardTitle">Mes connaissances</h2>
        <img class="cardImg" src="img/HTML5.svg" alt="logo Html5">
        <img class="cardImg" src="img/php-1.svg" alt="logo PHP">
        <img class="cardImg" src="img/javascript-4.svg" alt="logo JavaScript">
        <img class="cardImg" src="img/CSS.3.svg" alt="logo CSS3">
        <img class="cardImg" src="img/bootstrap-4.svg" alt="logo Bootstrap">
        <img class="cardImg" src="img/sass-1.svg" alt="logo Sass">

        </div>
    </div>
    <div id="myProjects">
        <div class="projectCard">
            <div class="cardTitle">project 1</div>
            <div class="img"></div>
            <div class="cardText">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio ducimus earum eos est eveniet magni minima, natus non numquam quaerat, quibusdam quis reprehenderit. Eos eum illum nihil nobis rerum.</p>
            </div>
        </div>
        <div class="projectCard">
            <div class="cardTitle">project 2</div>
            <div class="img"></div>
            <div class="cardText">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis distinctio ducimus earum eos est eveniet magni minima, natus non numquam quaerat, quibusdam quis reprehenderit. Eos eum illum nihil nobis rerum.</p>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="triangle2"></div>
    <section id="contact-me">
        <form class="contact-me" action="src/traitement.php" method="post">
            <div>
                <label for="name">Nom</label>
                <input type="text" id="name" name="user_name" required>
            </div>
            <div>
                <label for="mail">Mail</label>
                <input type="email" id="mail" name="user_mail" required>
            </div>
            <div class="msg">
                <label for="msg">Message</label>
                <textarea id="msg" name="user_message" required></textarea>
            </div>
            <input class="button" id="submit" type="submit" value="Submit">
        </form>
<!--        <div class="alert">-->
<!--            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
<!--            This is an alert box.-->
<!--        </div>-->
    </section>
    <div class="footer">
        <p>2020</p>
        <p>crée par Gaëlle EL KADAOUI</p>
    </div>
</footer>