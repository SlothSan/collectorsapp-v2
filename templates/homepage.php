<?php
use App\Helpers\DisplayCards;
$displayCards = new DisplayCards;
?>


<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="keywords" content="'Mike Oram', 'PHP', 'CSS', 'MTG', 'Magic the Gathering', 'SLIM'" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Mike Orams PHP Collectors App - Rewritten using Slim framework and MVC" />
    <link href="/scss/homepage.css" rel="stylesheet" type="text/css" />
    <title>MTG Card Collector App</title>
    <script src="https://kit.fontawesome.com/3824660a61.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="headerContainer">
        <header>
            <div>
                <h1 class="headerTitle">MTG Card Collector App</h1>
                <div>
                    <p class="headerText">Created by Mike O for the Full Stack Track course at iO Academy.</p>
                    <p class="headerText headerItalicText">Refactored to use the Slim framework.</p>
                </div>
                <div>
                    <p class="headerText">This is a project to showcase my PHP, CSS and SQL skills learnt at iO Academy.</p>
                    <p class="headerText">There is a database that holds Magic the gathering cards, they are displayed below with a link to view the card.</p>
                </div>
            </div>
        </header>
    </div>
    <section class="cardDisplayContainer">
        <?php echo $displayCards->createAllDisplayCards($cards); ?>
    </section>
    <footer>
        <a target="_blank" href="https://github.com/SlothSan">
            Created by Mike Oram 2022
            <i class="fa-brands fa-github fa-spin-hover"></i>
        </a>
    </footer>
</body>
</html>
