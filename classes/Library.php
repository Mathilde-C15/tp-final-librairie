<?php 

require_once 'Item.php';

class Library extends Item {
    public static int $totalItems = 0; // Nombre d'éléments dans la bibliothèque
    private array $items = [];

    public function __construct(){
        self::$totalItems ++;
    }

    // Setter/Getter items
    public function setItems(array $items): void{
        $this->items = $items;
    }
    public function getItems(): array{
        return $this->items;
    }
    
    // Setter/Getter totalItems
    public function setTotalItems(int $totalItems): void{
        $this->totalItems = self::$totalItems;
        }
    public function getTotalItems(): int{
        return $this->totalItems;
    }

    public function addItem(Item $item){
        $items[] = $item;
        $totalItems += 1;
    }
    public function getInfo(){
        
    }
}