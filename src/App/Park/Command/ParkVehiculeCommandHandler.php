<?php

namespace App\Park\Command;

use Core\Command;
use Core\CommandHandler;
use Core\CommandResponse;
use Domain\Fleet\FleetRepository;

class ParkVehiculeCommandHandler implements CommandHandler
{
    public $repository;
    public function __construct(FleetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(Command $command): CommandResponse
    {
        if ($this->repository->isVehiculeParkOn($command->vehiclePlateNumber, $command->location)) {
            return new CommandResponse('Vehicle already parked at this location');
        }
        $this->repository->parkVehicule($command->vehiclePlateNumber, $command->location);
        return new CommandResponse('Vehicule parked');
    }
}
