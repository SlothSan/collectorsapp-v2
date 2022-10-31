<?php

namespace App\Helpers;

class DisplayCards
{
    public function createAllDisplayCards (array $cards): string
    {
        $outputString = '';

        foreach ($cards as $card) {
            if (
                !is_array($card) ||
                !array_key_exists('title', $card) ||
                !array_key_exists('cardType', $card) ||
                !array_key_exists('color', $card) ||
                !array_key_exists('raritySet', $card)
            ) {
                return '';
            }
            $cardTitle = str_replace(' ', '%20', $card['title']);
            $cardString = "<div class='displayCard'>";
            $cardString .= "<p class='displayCardText'>Card Title: ". $card['title'] . "</p>";
            $cardString .= "<p class='displayCardText'>Card Type: " . $card['cardType'] . "</p>";
            $cardString .= "<p class='displayCardText'Card Color: " . $card['color'] . "</p>";
            $cardString .= "<p class='displayCardText'>Rarity: " . $card['raritySet'] . "</p>";
            $cardString .= "<a class='viewCardButton' type='submit' href=/card/" .  $cardTitle . ">View Card</a>";
            $cardString .= "</form>";
            $cardString .= "</div>";
            $outputString .=  $cardString;
        }
        return $outputString;
    }
}