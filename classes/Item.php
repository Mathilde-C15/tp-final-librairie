<?php

abstract class Item {
    protected string $title;
    protected string $author;
    protected string $image;


    public function __construct(){
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
    }

    public function getInfo() {
        //affichage dernière info
    }
}