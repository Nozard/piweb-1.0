<?php


namespace Joker\Piweb;



class Vehicle
{
    private $model;
    private $autonomy;
    private $year;

    public function __construct($model, $autonomy, $year)
    {
        $this->model = $model;
        $this->autonomy = $autonomy;
        $this->year = $year;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getAutonomy(): float
    {
        return $this->autonomy;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setModel($model): void
    {
        $this->model = $model;
    }

    public function setAutonomy($autonomy): void
    {
        $this->autonomy = $autonomy;
    }

    public function setYear($year): void
    {
        $this->year = $year;
    }
}