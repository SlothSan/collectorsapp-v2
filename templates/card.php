<?php

use App\Helpers\DisplayCardGenerator;
$displayCardGenerator = new DisplayCardGenerator;
?>

<html lang="en">
<head>
    <title>MTG Card Display Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="normalize.css" type="text/css" rel="stylesheet">
    <link href="/scss/card.css" type="text/css" rel="stylesheet">
</head>
<body class="cardpageBody">
<div class="mtgCardContainer">
    <div class="mtgCardHeader">
        <h1 class="mtgCardHeaderTitle">MTG Card Generator</h1>
        <p class="mtgCardHeaderText">Takes the info from the DB and generates a card using PHP & CSS</p>
    </div>
    <?php echo '<div class="cardBack' . $card['color'] . '"' .  '>' ?>
    </div>
    <a class="returnButton" href="/">Go Back To Homepage</a>
</div>
</body>
</html>