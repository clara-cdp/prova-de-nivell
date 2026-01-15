<?php

require('Play.php');

function findLongestPlay(array $listOfplays)
{
    $longestOne = $listOfplays[0];
    foreach ($listOfplays as $play) {
        if ($play->getRuntime() < $longestOne->getRuntime()) {
            $longestOne = $play;
        }
    }
    return $longestOne;
}
/*
function findByGenre(array $listOfPlays, string $searchBy)
{

    $genre = trim($searchBy);
    $foundPlays = [];
}


foreach($listOfPlays as $play){
    if($play->getSubGenre() == $)
}
}*/


$play1 = new Play('hello Dolly', 120, 12, 8, subGenre::classic);
$play4 = new Play('Carrousel', 130, 16, 10, subGenre::classic);
$play2 = new Play('Urintwon', 110, 14, 12, subGenre::jukebox);
$play3 = new Play('wicked', 100, 16, 9, subGenre::drama);

echo $play1;

$allPlays = [$play4, $play1, $play2, $play3];
echo "<hr>";
echo findLongestPlay($allPlays);
