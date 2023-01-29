<?php

abstract class Cereal
{
    protected string $type;
    protected string $sowingTime;

    public function __construct($type, $sowingTime)
    {
        $this->type = $type;
        $this->sowingTime = $sowingTime;
    }

    abstract protected function printInfoSeed();
    abstract protected function calculateTimeToHarvest();
}
