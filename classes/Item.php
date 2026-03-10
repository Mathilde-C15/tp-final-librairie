<?php

abstract class Item {
    private string $title;
    private string $author;
    private string $image;


    public function __construct($image, $title, $author){
        $this->title = $title;
        $this->author = $author;
        $this->image = $image;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getImage(){
        return $this->image;
    }

    public function getAuthor(){
        return $this->author;
    }

    abstract public function getInfo();
}