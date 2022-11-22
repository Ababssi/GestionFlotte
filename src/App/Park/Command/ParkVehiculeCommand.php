<?php

namespace App\Park\Command;

use Core\Command;

class ParkVehiculeCommand implements Command
{
    public $vehiculeId;
    public $fleetId;
    public $location;

    public function __construct($vehiculeId, $fleetId, $location)
    {
        $this->vehiculeId = $vehiculeId;
        $this->fleetId = $fleetId;
        $this->location = $location;
    }
}
