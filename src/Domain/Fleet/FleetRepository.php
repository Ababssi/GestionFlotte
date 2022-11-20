<?php

namespace Domain\Fleet;

interface FleetRepository
{
    //public function get(int $fleetId): Fleet;
    public function isVehiculeOnFleet($vehiculeId, $fleetId): bool;
    public function addVehicule($vehiculeId, $fleetId): array;
}
