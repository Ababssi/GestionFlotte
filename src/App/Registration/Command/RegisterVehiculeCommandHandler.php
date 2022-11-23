<?php

namespace App\Registration\Command;

use Core\Command;
use Core\CommandHandler;
use Core\CommandResponse;
use Domain\FleetRepository;

class RegisterVehiculeCommandHandler implements CommandHandler
{
    public $repository;
    public function __construct(FleetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(Command $command): CommandResponse
    {

        if (!$this->repository->isFleetExist($command->fleetId)) {
            return new CommandResponse('Fleet not found');
        }
        if ($this->repository->isVehiculeOnFleet($command->vehiclePlateNumber, $command->fleetId)) {
            return new CommandResponse('Vehicle already registered into this fleet');
        }
        $this->repository->registerVehicule($command->vehiclePlateNumber, $command->fleetId);
        return new CommandResponse('Vehicule registered');
    }
}
