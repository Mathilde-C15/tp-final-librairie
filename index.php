<?php

require_once 'classes/Item.php';
require_once 'classes/Magazine.php';
require_once 'classes/Book.php';
require_once 'classes/Library.php';

$test = new Magazine("image", "titre", "auteur");

$librairie = new Library();

$test->setIssueNumber(14);
// echo $test->getTitle();
// echo $test->getImage();
// echo $test->getAuthor();
echo $test->getInfo();



$librairie->addItem($test);

echo "<br>";
echo Library::$totalItems;