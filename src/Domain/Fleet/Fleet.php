<?php

namespace Domain\Fleet;

class Fleet
{
    private $id;
    private $vehicules;

    public function __construct(int $id, array $vehicules)
    {
        $this->id = $id;
        $this->vehicules = $vehicules;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getVehicules(): array
    {
        return $this->vehicules;
    }
}
