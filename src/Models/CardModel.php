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
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $query = $this->db->prepare('SELECT `id`, `title`, `cardType`, `color`, `raritySet` FROM `cards`
                    ORDER BY `id` DESC');
        $query->execute();
        return $query->fetchAll();
    }

}