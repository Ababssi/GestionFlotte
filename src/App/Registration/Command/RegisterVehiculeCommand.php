<?php

namespace App\Registration\Command;

use Core\Command;


class RegisterVehiculeCommand implements Command
{
    public $vehiclePlateNumber;
    public $fleetId;

    public function __construct($vehiclePlateNumber, $fleetId)
    {
        $this->vehiclePlateNumber = $vehiclePlateNumber;
        $this->fleetId = $fleetId;
    }
}
