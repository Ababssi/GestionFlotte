<?php

namespace App\Park\Command;

use Core\Command;
use Core\CommandHandler;
use Core\CommandResponse;
use Domain\Vehicule\VehiculeRepository;

class ParkVehiculeCommandHandler implements CommandHandler
{
    public $repository;
    public function __construct(VehiculeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(Command $command): CommandResponse
    {
        if ($this->repository->isVehiculePark($command->vehiculeId)) {
            return new CommandResponse('Vehicle already parked into this fleet');
        }
        $this->repository->parkVehicule($command->vehiculeId);
        return new CommandResponse('Vehicule parked');
    }
}
