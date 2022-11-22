<?php

namespace App\Registration\Command;

use Core\Command;
use Core\CommandHandler;
use Core\CommandResponse;
use Domain\Fleet\FleetRepository;

class RegisterVehiculeCommandHandler implements CommandHandler
{
    public $repository;
    public function __construct(FleetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(Command $command): CommandResponse
    {
        if ($this->repository->isVehiculeOnFleet($command->vehiculeId, $command->fleetId)) {
            return new CommandResponse('Vehicle already registered into this fleet');
        }
        $this->repository->addVehicule($command->vehiculeId, $command->fleetId);
        return new CommandResponse('Vehicule registered');
    }
}
