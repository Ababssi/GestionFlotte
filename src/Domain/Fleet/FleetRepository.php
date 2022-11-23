<?php

namespace Domain\Fleet;

interface FleetRepository
{
    //public function get(int $fleetId): Fleet;
    public function isVehiculeOnFleet(string $vehiculeId, int $fleetId): bool;
    public function registerVehicule(string $vehiculeId, int $fleetId): void;
    public function isVehiculeParkOn(string $vehiculeId, string $location): bool;
    public function parkVehicule(string $vehiculeId, string $location);
    public function createFleet(int $user);
    public function isFleetExist(int $fleetId);
}
