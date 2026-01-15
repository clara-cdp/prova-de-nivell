<?php


require('Theatre.php');



$play1 = new Play('Hello Dolly', 120, 12, 8, subGenre::classic);
$play4 = new Play('Carrousel', 130, 16, 10, subGenre::classic);
$play2 = new Play('Urinetwon', 110, 14, 12, subGenre::jukebox);
$play3 = new Play('Wicked', 100, 16, 9, subGenre::drama);

echo $play1;
echo "<hr>";
$allPlays = [$play4, $play1, $play2, $play3];
echo implode('<br>', $allPlays);
echo "<hr>";

$theatre1 = new Theatre('Apollo', $allPlays);
echo $theatre1;
echo "<hr>";

echo $theatre1->findLongestPlay();
echo "<hr>";

echo $theatre1->sortBySubGenre(SubGenre::classic);
