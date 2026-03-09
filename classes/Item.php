<?php

abstract class Item {
    private string $title;
    private string $author;
    private string $image;


    public function __construct(){
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
    }

    abstract public function getInfo();
}