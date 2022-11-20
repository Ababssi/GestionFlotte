<?php

namespace App\Registration\Command;

use Domain\Fleet\FleetRepository;
use Infra\CommandReponse;

class RegisterVehiculeCommandHandler
{
    public $repository;
    public function __construct(FleetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(RegisterVehiculeCommand $command): CommandResponse
    {
        if ($this->repository->isVehiculeOnFleet($command->vehiculeId)) {
            CommandRespose::withValue('Vehicle already registered into this fleet');
        }
        $this->repository->addVehicule($command->vehiculeId);
        return CommandRespose::withValue('Vehicule registered');
    }
}
