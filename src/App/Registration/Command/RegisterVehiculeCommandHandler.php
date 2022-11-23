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
        try {
            if (!$this->repository->isFleetExist($command->fleetId)) {
                return new CommandResponse('Fleet not found');
            }
            if ($this->repository->isVehiculeOnFleet($command->vehiclePlateNumber, $command->fleetId)) {
                return new CommandResponse('Vehicle already registered into this fleet');
            }
            $this->repository->registerVehicule($command->vehiclePlateNumber, $command->fleetId);
            return new CommandResponse('Vehicule registered');
        } catch (\Exception $e) {
            return new CommandResponse($e->getMessage());
        }
    }
}
