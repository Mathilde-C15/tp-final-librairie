<?php 

require_once 'Item.php';

class Library extends Item {
    static int $totalItems = 0; // Nombre d'éléments dans la bibliothèque

    public function setTotalItems(int $totalItems): void{
        $this->totalItems = $totalItems;
    }

    public function getTotalItems(): int{
        return $this->totalItems;
    }

    public function addItem(Item $item){

        $totalItems += 1;


        //Incremente $totalItems
        // Ajoute un élément à la bibliothèque
    }

    public function getItems(){
        // Affiche la liste des magazines et livres
    }
}