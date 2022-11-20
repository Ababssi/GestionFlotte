<?php


namespace domain\Fleet\FleetRepositoty;

interface FleetRepositoty
{
    public function isVehiculeOnFleet($vehiculeId): bool;
    public function addVehicule($vehiculeId);
}
