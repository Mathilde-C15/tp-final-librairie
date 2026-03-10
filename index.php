<?php

require_once 'classes/Item.php';
require_once 'classes/Magazine.php';
require_once 'classes/Book.php';
require_once 'classes/Library.php';

$test = new Magazine("image", "titre", "auteur");

$test->setIssueNumber(14);
// echo $test->getTitle();
// echo $test->getImage();
// echo $test->getAuthor();
echo $test->getInfo();

echo "<br>";
echo Library::$totalItems;