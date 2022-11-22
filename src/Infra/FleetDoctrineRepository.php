<?php

namespace Infra;

use Domain\Fleet\FleetRepository;
use Domain\Fleet\Vehicule;
use Domain\Fleet\Fleet;

class FleetDoctrineRepository implements FleetRepository
{

    // public function get(int $fleetId): Fleet
    // {
    //     return new Fleet();
    // }

    public function isVehiculeOnFleet($vehiculeId, $fleetId): bool
    {
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
    }

    public function isVehiculePark(int $vehiculeId): bool
    {
        $vehiculeId = 1;
        $park = ['marseille', 'paris', 'lyon', 'toulouse', 'nice', 'nantes', 'montpellier', 'strasbourg', 'bordeaux', 'lille'];
        if (in_array($vehiculeId, $park)) {
            return true;
        }
        return false;
    }

    public function parkVehicule(int $vehiculeId)
    {
        $park = ['marseille', 'paris', 'lyon', 'toulouse', 'nice', 'nantes', 'montpellier', 'strasbourg', 'bordeaux', 'lille'];
        $park[] = $vehiculeId;
        return $park;
    }
}
