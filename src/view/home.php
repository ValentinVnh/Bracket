<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Accueil — Bracket.</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
    <nav>
        <a href="/web/frontController.php?action=home"><p class="logo">Bracket.</p></a>
        <div class="nav-raccourcis">
            <a href="/web/frontController.php?action=bracelets"><p>Bracelets</p></a>
            <a href="/web/frontController.php?action=bagues"><p>Bagues</p></a>
        </div>
    </nav>
</header>
<main>
    <div class="starred">
        <div class="starred-gauche">
            <img src="../../images/100.png" alt="Produit à l'affiche">
        </div>
        <div class="starred-droite">
            <small>À L'AFFICHE</small>
            <h1>Bracelet Daniel</h1>
            <h2>5 étoiles — Acier inoxydable — Argent</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur.
            </p>
            <div class="starred-buttons">
                <button id="en-savoir-plus">EN SAVOIR PLUS</button>
                <button id="acheter">ACHETER</button>
            </div>
        </div>
    </div>

    <h1>Les classiques</h1>
    <?php
    require "produit/list.php";
    ?>

    <h1>Les nouveautés</h1>
    <small><a href="/web/frontController.php?action=readAll">VOIR PLUS ></a></small>
</main>
<footer>
    <!-- <p>Bracket — Bijouterie en ligne</p> -->
</footer>
</body>
</html>
