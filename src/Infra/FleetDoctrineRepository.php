<?php

namespace Infra;

use Domain\Fleet\FleetRepository;
use FleetAbstract;

class FleetDoctrineRepository extends FleetAbstract implements FleetRepository
{

    public function isVehiculeOnFleet(string $vehiclePlateNumber, $fleetId): bool
    {
        $result = $this->db->isVehiculeOnFleet($vehiclePlateNumber, intval($fleetId));
        return $result === false ? false : true;
    }

    public function registerVehicule($vehiclePlateNumber, $fleetId): void
    {
        $this->db->createVehicule($vehiclePlateNumber);
        $this->db->assignVehiculeToFleet($vehiclePlateNumber, $fleetId);
    }

    public function isVehiculeParkOn(string $vehiclePlateNumber, string $location): bool
    {
        $result = $this->db->isVehiculePark($vehiclePlateNumber, $location);
        return $result === false ? false : true;
    }

    public function parkVehicule(string $vehiclePlateNumber, string $location)
    {
        $this->db->setVehiculeLocalisation($vehiclePlateNumber, $location);
    }

    public function createFleet(int $user)
    {
        return $this->db->createFleet($user);
    }

    public function isFleetExist(int $fleetId)
    {
        $result = $this->db->getFleet($fleetId);
        return $result === false ? false : true;
    }
}
