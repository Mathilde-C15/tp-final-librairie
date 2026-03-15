<?php

require_once 'classes/Item.php';
require_once 'classes/Magazine.php';
require_once 'classes/Book.php';
require_once 'classes/Library.php';

$library = new Library();

$book1 = new Book("image", "1984", " George Orwell");
$book1->setPageCount(328);
$magazine1 = new Magazine("image", "National Geographic", " Divers");
$magazine1->setIssueNumber(150);
$book2 = new Book("image", "La ligne verte", " Stephen King");
$book2->setPageCount(1065);
$magazine2 = new Magazine("image", "Ca m'intéresse", " Prisma média");
$magazine2->setIssueNumber(203);


$library->addItem($book1);
$library->addItem($magazine1);
$library->addItem($book2);
$library->addItem($magazine2);


$title = "Index";
$template = "template/index.phtml";
include "template/layout.phtml";