<?php

namespace App\Registration\Command;


class RegisterVehiculeCommand
{
    public $vehiculeId;
    public $fleetId;

    public function __construct($vehiculeId, $fleetId)
    {
        $this->vehiculeId = $vehiculeId;
        $this->fleetId = $fleetId;
    }
}
