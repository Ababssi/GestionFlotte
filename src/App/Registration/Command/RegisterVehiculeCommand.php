<?php

namespace App\Registration\Command;

use Core\Command;


class RegisterVehiculeCommand implements Command
{
    public $vehiculeId;
    public $fleetId;

    public function __construct($vehiculeId, $fleetId)
    {
        $this->vehiculeId = $vehiculeId;
        $this->fleetId = $fleetId;
    }
}
