<?php

require_once 'Item.php';

class Magazine extends Item {
    private int $issueNumber = 0;

    public function setIssueNumber(int $issueNumber): void{
        // Ajouter les verifications
        $this->issueNumber = $issueNumber;
    }

    public function getIssueNummber(): int{
        return $this->issueNumber;
    }

    public function getInfo() {
        //affichage edition
        return "Magazine - Edition $this->issueNumber";
    }
}