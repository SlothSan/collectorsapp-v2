<?php

namespace App\Helpers;

class DisplayCardGenerator
{
    public function createMTGCard(array $card): string
    {
        if (!array_key_exists('color', $card) ||
            !array_key_exists('title', $card) ||
            !array_key_exists('genericCost', $card) ||
            !array_key_exists('greenCost', $card) ||
            !array_key_exists('blackCost', $card) ||
            !array_key_exists('blueCost', $card) ||
            !array_key_exists('redCost', $card) ||
            !array_key_exists('whiteCost', $card) ||
            !array_key_exists('cardArt', $card) ||
            !array_key_exists('cardType', $card) ||
            !array_key_exists('setType', $card) ||
            !array_key_exists('raritySet', $card) ||
            !array_key_exists('abilityCostGeneric', $card) ||
            !array_key_exists('abilityCostGreen', $card) ||
            !array_key_exists('abilityCostRed', $card) ||
            !array_key_exists('abilityCostBlue', $card) ||
            !array_key_exists('abilityCostBlack', $card) ||
            !array_key_exists('abilityCostWhite', $card) ||
            !array_key_exists('abilityTap', $card) ||
            !array_key_exists('description', $card) ||
            !array_key_exists('designerFlavourText', $card) ||
            !array_key_exists('power', $card) ||
            !array_key_exists('toughness', $card)) {
            return '';
        }

        $color = $card['color'];
        $cardTitle = $card['title'];
        $genericManaCost = $card['genericCost'];
        $cardArt = $card['cardArt'];
        $cardType = $card['cardType'];
        $setType = $card['raritySet'];
        $description = $card['description'];
        $flavorDesignerText = $card['designerFlavourText'];
        $power = $card['power'];
        $toughness = $card['toughness'];
        $outputString =  "<div class='cardBack$color'>";
        $outputString .= "<div class='cardTopContainer'>";
        $outputString .= "<div class='cardTitleContainer'>";
        $outputString .= "<p>$cardTitle</p>";
        $outputString .=  "</div>";
        $outputString .=  "<div class='manaCostContainer'>";
        $outputString .=  "<div class='manaCostDisplayContainer'>";
        if($genericManaCost != null) {
            $outputString .= "<div class='manaNeutralContainer'>";
            $outputString .= "<img class='manaNeutral' src='/assets/imgs/manaCosts/mana_circle.png' alt='neutral mana'>";
            $outputString .= "<p class='manaNeutralCost'>$genericManaCost</p>";
            $outputString .= "</div>";
        }
        if ($card['greenCost'] != null) {
            $counterGreen = $card['greenCost'];
            for ($counterGreen; $counterGreen > 0; $counterGreen--) {
                $outputString .= "<img class='manaCostColor' src='/assets/imgs/manaCosts/mana_g.png' alt='green mana'>";
            }
        }
        if ($card['blackCost'] != null) {
            $counterBlack = $card['blackCost'];
            for ($counterBlack; $counterBlack > 0; $counterBlack--) {
                $outputString .= "<img class='manaCostColor' src='/assets/imgs/manaCosts/mana_b.png' alt='black mana'>";
            }
        }
        if ($card['blueCost'] != null) {
            $counterBlue = $card['blueCost'];
            for ($counterBlue; $counterBlue > 0; $counterBlue--) {
                $outputString .= "<img class='manaCostColor' src='/assets/imgs/manaCosts/mana_u.png' alt='blue mana'>";
            }
        }
        if ($card['redCost'] != null) {
            $counterRed = $card['redCost'];
            for ($counterRed; $counterRed > 0; $counterRed--) {
                $outputString .= "<img class='manaCostColor' src='/assets/imgs/manaCosts/mana_r.png' alt='red mana'>";
            }
        }
        if ($card['whiteCost'] != null) {
            $counterWhite = $card['whiteCost'];
            for ($counterWhite; $counterWhite > 0; $counterWhite--) {
                $outputString .= "<img class='manaCostColor' src='/assets/imgs/manaCosts/mana_w.png' alt='white mana'>";
            }
        }
        $outputString .= "</div>"; // Close mana-cost
        $outputString .=  "</div>"; // Close Mana Container
        $outputString .=  "</div>"; // Close Card Top Div
        $outputString .= "<div class='cardArtContainer''>";
        $outputString .= "<img class='cardArt' src='/assets/imgs/cardArt/$cardArt' alt='$cardTitle' >";
        $outputString .= "</div>"; //End of card art container
        $outputString .=  "<div class='cardTypeContainer'>";
        $outputString .= "<div class='cardTypeTitleContainer'>";
        $outputString .=  "<p class='cardTypeText'>$cardType</p>";
        $outputString .=  "</div>";
        $outputString .=  "<div class='cardTypeSetLogoContainer'>";
        $outputString .=  "<img class='cardSetLogoImage' src='/assets/imgs/M15_setIcons/m15_setIcon_$setType.jpeg' alt='M15 $setType' >";
        $outputString .=  "</div>";
        $outputString .=  "</div>"; // End of card type container
        $outputString .=  "<div class='descriptionContainer'>";
        $outputString .=  "<span class='abilityCostContainer'>";
        if($card['abilityCostGeneric'] != null) { //Logic goes here for ability costs / tap
            $outputString .=  "<img class='abilityCost abilityNeutral' src='/assets/imgs/manaCosts/mana_circle.png' alt='ability mana cost'>";
            $outputString .=  "<p class='abilityNeutralCost'>" . $card['abilityCostGeneric'] . "</p>";
        }
        if ($card['abilityCostGreen'] != null) {
            $outputString .= "<img class='abilityCost' src='/assets/imgs/manaCosts/mana_g.png' alt='green ability mana cost'>";
        }
        if ($card['abilityCostRed'] != null) {
            $outputString .=  "<img class='abilityCost' src='/assets/imgs/manaCosts/mana_r.png' alt='red ability mana cost'>";
        }
        if ($card['abilityCostBlue'] != null) {
            $outputString .=  "<img class='abilityCost' src='/assets/imgs/manaCosts/mana_u.png' alt='blue ability mana cost'>";
        }
        if ($card['abilityCostBlack'] != null) {
            $outputString .=  "<img class='abilityCost' src='/assets/imgs/manaCosts/mana_b.png.' alt='black ability mana cost'>";
        }
        if ($card['abilityCostWhite'] != null) {
            $outputString .=  "<img class='abilityCost' src='/assets/imgs/manaCosts/mana_w.png' alt='white ability mana cost'>";
        }
        if ($card['abilityTap']) {
            $outputString .=  ", ";
            $outputString .= "<img class='abilityCost' src='/assets/imgs/manaCosts/mana_t.png' alt='tap-icon'>";
            $outputString .=   ", ";
        }
        $outputString .=  "</span>";
        $outputString .=  "<div class='descriptionContentsContainer'>";
        if ($card['description'] != null) {
            $outputString .=  "<p>$description</p>";
        }
        if($card['designerFlavourText'] != null) {
            $outputString .=  "<p class='designerText'>$flavorDesignerText</p>";
        }
        $outputString .= "</div>";
        $outputString .=  "</div>"; // End of description container.
        $outputString .=  "<div class='powerandtoughContainer'>";
        if($card['power'] and $card['toughness'] != null) {
            $outputString .=  "<p class='powerandtough'>$power/$toughness</p>";
        }
        $outputString .= "</div>"; // end of power and tough
        $outputString .=  "</div>";

        return $outputString;
    }
}