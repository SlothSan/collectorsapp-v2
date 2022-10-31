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
</head>
<body>
    <div class="headerContainer">
        <header>
            <div>
                <h1 class="headerTitle">MTG Card Collector App</h1>
                <div>
                    <p class="headerText">Created by Mike O for the Full Stack Track course at iO Academy.</p>
                    <p class="headerTextTag">Refactored to use the Slim framework.</p>
                </div>
            </div>
        </header>
    </div>
    <section class="projectBlurbContainer">
        <p class="projectBlurbText">This is a project to showcase my PHP, CSS and SQL skills learnt at iO Academy.</p>
        <p class="projectBlurbText">There is a database that holds Magic the gathering cards, they are displayed below with a link to view the card.</p>
    </section>
    <section class="cardDisplayContainer">
        <?php echo $displayCards->createAllDisplayCards($cards); ?>
        <img src="../public/assets/imgs/backgrounds/background1.jpeg"  alt="lol"/>
    </section>
</body>
</html>
