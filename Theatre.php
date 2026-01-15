<?php

require('Play.php');

class Theatre
{
    public string $name;
    public array $listOfPlays = [];

    public function __construct(string $name, array $listOfPlays = [])
    {
        $this->name = $name;
        $this->listOfPlays = $listOfPlays;
    }


    function findLongestPlay()
    {
        $longestOne = $this->listOfPlays[0];

        foreach ($this->listOfPlays as $play) {
            if ($play->runtime < $longestOne->runtime) {
                $longestOne = $play;
            }
        }
        return $longestOne;
    }

    public  function sortBySubGenre(SubGenre $genre)
    {
        $foundPlays = [];

        foreach ($this->listOfPlays as $play) {
            if ($play->subGenre == $genre) {
                $foundPlays[] = $play;
            }
        }

        if (empty($foundPlays)) echo "No musicals to compare";


        return  implode("<br>", $foundPlays);
    }




    public function __toString()
    {

        $printAll = "";

        foreach ($this->listOfPlays as $play) {
            $printAll .= $play . "<br>";
        }
        return $printAll;
    }
}
