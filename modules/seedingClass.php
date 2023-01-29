<?php

class SeedingType extends Seed
{
    public static string $seeding = "Conventional seeding";

    public function __construct($type, $sowingTime, $brand, $variety, $sowingMonth)
    {
        parent::__construct($type, $sowingTime, $brand, $variety, $sowingMonth);
    }

    public function printInfoSeeding()
    {
        echo "<br><br>";
        if ($this::$seeding === "Conventional seeding") {
            return "Conventional seeding is used only in areas which have an arable soil 
            and can be reached easily with various types of agricultural machinery";
        } else {
            return "Direct seeding involves the sowing of seeds directly into the soil to achieve
            germination and establishment. It can be achieved mechanically or by hand.";
        }
    }

    public function setSowingMonth($sowingMonth)
    {
        $this->sowingMonth = $sowingMonth;
    }

    public function printInfoSeed()
    {
        echo "<br><br>";
        return "<h2>Seed Information</h2>
                Type: {$this->type} <br>
                Variety: {$this->variety} <br>
                Brand: {$this->brand} <br>
                Sowing Time: {$this->sowingTime} <br>
                Sowing Month: {$this->sowingMonth} <br>
                Seeding: {$this::$seeding}";
    }
}
