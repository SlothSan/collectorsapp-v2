<?php

?>


<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="keywords" content="'Mike Oram', 'PHP', 'CSS', 'MTG', 'Magic the Gathering', 'SLIM'" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Mike Orams PHP Collectors App - Rewritten using Slim framework and MVC" />
    <title>MTG Card Collector App</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>
<body>
    <header class="headerContainer">
        <h1 class="headerTitle">MTG Card Collector App</h1>
        <p class="headerText">Created by Mike O for the Full Stack Track course at iO Academy.</p>
        <p class="headerText">Refactored to use the Slim framework.</p>
    </header>
    <section class="projectBlurbContainer">
        <p class="projectBlurbText">This is a project to showcase my PHP, CSS and SQL skills learnt at iO Academy.</p>
        <p class="projectBlurbText">There is a database that holds Magic the gathering cards, they are displayed below with a link to view the card.</p>
    </section>
    <section class="cardDisplayContainer">
        <?php print_r($cards) ?>
    </section>
</body>
</html>
