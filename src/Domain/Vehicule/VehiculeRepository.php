<?php

namespace Domain\Vehicule;

interface VehiculeRepository
{
    public function isVehiculePark(int $vehiculeId): bool;
    public function parkVehicule(int $vehiculeId);
}
