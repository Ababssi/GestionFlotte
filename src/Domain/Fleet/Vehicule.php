<?php

namespace Domain\Fleet\Vehicule;

class Vehicule
{
    private $id;
    private $type;
    private $parked;

    public function __construct(int $id, string $parked, string $type)
    {
        $this->id = $id;
        $this->parked = $parked;
        $this->type = $type;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function parked(): string
    {
        return $this->parked;
    }

    public function type(): string
    {
        return $this->type;
    }
}
