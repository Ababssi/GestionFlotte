<?php

namespace App\Park\Command;

use Core\Command;

class ParkVehiculeCommand implements Command
{
    public $vehiculeId;
    public $fleetId;

    public function __construct($vehiculeId, $fleetId)
    {
        $this->vehiculeId = $vehiculeId;
        $this->fleetId = $fleetId;
    }
}
