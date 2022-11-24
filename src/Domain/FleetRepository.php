<?php

namespace Domain;

interface FleetRepository
{
    //public function get(int $fleetId): Fleet;
    public function isVehiculeInFleet(string $vehiculeId, int $fleetId): bool;
    public function isVehiculeAlreadyParked(string $vehiculeId, string $location): bool;
    public function registerVehicule(string $vehiculeId, int $fleetId): void;
    public function parkVehicule(string $vehiculeId, string $location);
    public function createFleet(int $user);
    public function isFleetExist(int $fleetId);
}
