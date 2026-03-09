<?php

require_once 'Item.php';

class Book extends Item {
    private $pageCount;

    public function setPageCount(int $pageCount): void{
        $this->pageCount = $pageCount;
    }
        
    public function getPageCount(): int{
        return $this->pageCount;
    }

    public function getInfo(): string{
        return "Nombre de pages: $this->pageCount";
    }
}