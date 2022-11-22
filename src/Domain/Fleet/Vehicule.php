<?php

namespace Domain\Fleet\Vehicule;

class Vehicule
{
    private $plateNumber;
    private $localisation;

    public function __construct()
    {
    }

    public function getPlateNumber(): int
    {
        return $this->plateNumber;
    }
    public function setPlateNumber(int $plateNumber)
    {
        $this->plateNumber = $plateNumber;
    }

    public function getLocalisation(): string
    {
        return $this->localisation;
    }
    public function setLocalisation(string $localisation)
    {
        $this->localisation = $localisation;
    }
}
