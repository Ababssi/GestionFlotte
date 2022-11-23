<?php

namespace App\Park\Command;

use Core\Command;

class ParkVehiculeCommand implements Command
{
    public $vehiclePlateNumber;
    public $fleetId;
    public $location;

    public function __construct($vehiclePlateNumber, $fleetId, $lat, $lng)
    {
        $this->vehiclePlateNumber = $vehiclePlateNumber;
        $this->fleetId = $fleetId;
        $this->location = $lat . "-" . "$lng";
    }
}
