<?php

require_once("sowingInterface.php");

class Seed extends Cereal implements cerealSowing
{
    protected string $brand;
    protected string $variety;
    protected int $sowingMonth;

    public function __construct($type, $sowingTime, $brand, $variety, $sowingMonth)
    {
        parent::__construct($type, $sowingTime);
        $this->brand = $brand;
        $this->variety = $variety;
        $this->sowingMonth = $sowingMonth;
    }

    public function __destruct()
    {
        echo "<br><br><br><br>---- " . $this->type . " of " . $this->variety . " variety has been successfuly deleted ----";
    }


    public function calculateMonthsSowingTime(): string
    {
        if ($this->sowingTime === "Winter") {
            return "from October to February";
        } else {
            return "from March to September";
        }
    }

    public function printInfoSowing(): string
    {
        return "<br>{$this->type} should be sowed {$this->calculateMonthsSowingTime()}.";
    }

    public function calculateTimeToHarvest()
    {
        $harvestMonth = $this->sowingMonth + 6;
        echo "<br>";
        if ($harvestMonth > 12) {
            $harvestMonth -= 12;
            return "You should harvest your {$this->type} around the {$harvestMonth}th month of the year.";
        } else {
            return "You should harvest your {$this->type} around the {$harvestMonth}th month of the year.";
        }
    }

    public function printInfoSeed()
    {
        return "<h2>Seed Information</h2>
                Type: {$this->type} <br>
                Variety: {$this->variety} <br>
                Brand: {$this->brand} <br>
                Sowing Time: {$this->sowingTime} <br>
                Sowing Month: {$this->sowingMonth} <br>";
    }
}
