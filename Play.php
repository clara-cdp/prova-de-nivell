<?php

enum SubGenre: string
{
    case classic = 'classic';
    case drama = 'drama';
    case kids = 'kids';
    case jukebox = 'jukebox';
}

class Play
{

    public string $title;
    public int $runtime;
    public int $numberOdSongs;
    public int $NumberOfCharacters;
    public SubGenre $subGenre;

    public function __construct(string $title, int $runtime, int $numberOdSongs, int $NumberOfCharacters, SubGenre $subGenre)
    {
        $this->title = $title;
        $this->runtime = $runtime;
        $this->numberOdSongs = $numberOdSongs;
        $this->NumberOfCharacters = $NumberOfCharacters;
        $this->subGenre = $subGenre;
    }

    public function getRuntime()
    {
        return $this->runtime;
    }

    public function getSubGenre()
    {
        return $this->subGenre->value;
    }


    public function __toString()
    {
        return sprintf(
            " <em>%s</em> | runtime: %d mins. | number of songs: %d | num. of characters %d | subGenre: ",
            $this->title,
            $this->runtime,
            $this->numberOdSongs,
            $this->NumberOfCharacters,
            $this->subGenre->value
        );
    }
}
