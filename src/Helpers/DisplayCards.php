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
            $cardString = "<div class='displayCard'>";
            $cardString .= "<p>Card Title: ". $card['title'] . "</p>";
            $cardString .= "<p>Card Type: " . $card['cardType'] . "</p>";
            $cardString .= "<p>Card Color: " . $card['color'] . "</p>";
            $cardString .= "<p>Rarity: " . $card['raritySet'] . "</p>";
            $cardString .= "<form method='post'>";
            $cardString .= "<button class='view-card-button' type='submit' value='". $card['title'] . "' name='createCard'>View Card</button>";
            $cardString .= "</form>";
            $cardString .= "</div>";
            $outputString .=  $cardString;
        }
        return $outputString;
    }
}