<?php


class LasVegas
{

    //define variables

    private string $name;
    private int $pools;
    private int $saunas;
    private int $cocktailbars;
    private string $source;

    //Constructor

    public function __construct(string $name, int $pools, int $saunas, int $cocktailbars, string $source)
    {
        $this->name = $name;
        $this->pools = $pools;
        $this->saunas = $saunas;
        $this->cocktailbars = $cocktailbars;
        $this->source = $source;
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


    public function getSource(): string
    {
        return $this->source;
    }
}