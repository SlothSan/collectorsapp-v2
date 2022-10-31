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

    public function addCardToDb()
    {

    }

}