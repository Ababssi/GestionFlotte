<?php

namespace Infra;

use Domain\Fleet\FleetRepository;

class FleetDoctrineRepository implements FleetRepository
{
    // public function get(int $fleetId): Fleet
    // {
    //     return new Fleet();
    // }

    public function isVehiculeOnFleet($vehiculeId, $fleetId): bool
    {
        // TODO: Implement isVehiculeOnFleet() method.
        $fleet = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        if (in_array($vehiculeId, $fleet)) {
            return true;
        }
        return false;
    }
    public function addVehicule($vehiculeId, $fleetId): array
    {
        $fleet = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $fleet[] = $vehiculeId;
        return $fleet;
        // TODO: Implement addVehicule() method.
    }
}
