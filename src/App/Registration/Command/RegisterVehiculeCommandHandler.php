<?php

namespace App\Registration\Command;

use Domain\Fleet\FleetRepository;
use Infra\CommandResponse;

class RegisterVehiculeCommandHandler
{
    public $repository;
    public function __construct(FleetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(RegisterVehiculeCommand $command)
    {
        if ($this->repository->isVehiculeOnFleet($command->vehiculeId, $command->fleetId)) {
            CommandResponse::withValue('Vehicle already registered into this fleet');
        }
        $this->repository->addVehicule($command->vehiculeId, $command->fleetId);
        return CommandResponse::withValue('Vehicule registered');
    }
}
