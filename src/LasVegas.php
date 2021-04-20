<?php

namespace Nico\ViewaLasVegas;

class LasVegas
{

    //define variables

    private string $name;
    private int $pools;
    private int $saunas;
    private int $cocktailbars;
    private string $photo;

    //Constructor

    public function __construct(string $name, int $pools, int $saunas, int $cocktailbars, string $photo)
    {
        $this->name = $name;
        $this->pools = $pools;
        $this->saunas = $saunas;
        $this->cocktailbars = $cocktailbars;
        $this->photo = $photo;
    }

    //Getters

    public function getName(): string
    {
        return $this->name;
    }


    public function getPools(): int
    {
        return $this->pools;
    }


    public function getSaunas(): int
    {
        return $this->saunas;
    }


    public function getCocktailbars(): int
    {
        return $this->cocktailbars;
    }


    public function getPhoto(): string
    {
        return $this->photo;
    }
}