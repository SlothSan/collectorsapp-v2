<?php

namespace App\Models;
use PDO;

class CardModel
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllCards()
    {
        $query = $this->db->prepare('SELECT `id`, `title`, `cardType`, `color`, `raritySet` FROM `cards`
                    ORDER BY `id` DESC');
        $query->execute();
        return $query->fetchAll();
    }

    public function getCardByTitle(string $cardTitle)
    {
        $cardName = $cardTitle;
        $queryString = "SELECT `color`, `title`, `genericCost`, `greenCost`, `blackCost`, `blueCost`, `redCost`, `whiteCost`,
       `cardArt`, `cardType`, `setType`, `raritySet`, `abilityCostGeneric`, `abilityCostGreen`, `abilityCostRed`, `abilityCostBlue`,
       `abilityCostBlack`, `abilityCostWhite`, `abilityTap`, `description`, `designerFlavourText`, `power`, `toughness`
        FROM `cards` WHERE `title` LIKE :cardTitle";
        $query = $this->db->prepare($queryString);
        $query->bindParam(':cardTitle', $cardName);
        $query->execute();
        return $query->fetch();
    }

    public function addCardToDb(array $card)
    {
        function checkIfNull($toBeChecked)
        {
            if ($toBeChecked === 'null') {
                return null;
            } else {
                return intval($toBeChecked);
            }
        }

        //Placeholder setup for hardening the Db add against SQL Injection.
        $title = $card['title'];
        $cardType = $card['cardType'];
        $color = $card['color'];
        $raritySet = $card['raritySet'];
        $genericCost = checkIfNull($card['genericCost']);
        $greenCost = checkIfNull($card['greenCost']);
        $blackCost = checkIfNull($card['blackCost']);
        $blueCost = checkIfNull($card['blueCost']);
        $redCost = checkIfNull($card['redCost']);
        $whiteCost = checkIfNull($card['whiteCost']);
        $abilityCostGeneric = checkIfNull($card['abilityCostGeneric']);
        $abilityCostGreen = checkIfNull($card['abilityCostGreen']);
        $abilityCostBlack = checkIfNull($card['abilityCostBlack']);
        $abilityCostBlue = checkIfNull($card['abilityCostBlue']);
        $abilityCostRed = checkIfNull($card['abilityCostRed']);
        $abilityCostWhite = checkIfNull($card['abilityCostWhite']);
        $abilityTap = $card['abilityTap'];
        $description = $card['description'];
        $designerFlavourText = $card['designerFlavourText'];
        $power = checkIfNull($card['power']);
        $toughness = checkIfNull($card['toughness']);
        $queryString = 'INSERT INTO  `cards` (`title`, `cardType`, `color`, `raritySet`, `genericCost`, `greenCost`, `blackCost`, `blueCost`, 
                      `redCost`, `whiteCost`, `abilityCostGeneric`, `abilityCostGreen`, `abilityCostBlack`, `abilityCostBlue`, `abilityCostRed`, 
                      `abilityCostWhite`, `abilityTap`, `description`, `designerFlavourText`, `power`, `toughness`)
	VALUES (:title, :cardType, :color, :raritySet, :genericCost, :greenCost, :blackCost, :blueCost, :redCost, :whiteCost,
	         :abilityCostGeneric, :abilityCostGreen, :abilityCostBlack, :abilityCostBlue, :abilityCostRed, :abilityCostWhite, 
	        :abilityTap, :description, :designerFlavourText, :power, :toughness)';
        $query = $this->db->prepare($queryString);
        $query->execute(['title' => $title, 'cardType' => $cardType, 'color' => $color, 'raritySet' => $raritySet, 'genericCost' => $genericCost,
            'greenCost' => $greenCost, 'blackCost' => $blackCost, 'blueCost' => $blueCost, 'redCost' => $redCost, 'whiteCost' => $whiteCost,
            'abilityCostGeneric' => $abilityCostGeneric, 'abilityCostGreen' => $abilityCostGreen, 'abilityCostBlack' => $abilityCostBlack,
            'abilityCostBlue' => $abilityCostBlue, 'abilityCostRed' => $abilityCostRed, 'abilityCostWhite' => $abilityCostWhite, 'abilityTap' => $abilityTap,
            'description' => $description, 'designerFlavourText' => $designerFlavourText, 'power' => $power, 'toughness' => $toughness]);

    }

}