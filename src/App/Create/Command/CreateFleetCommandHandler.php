<?php

namespace App\Create\Command;

use Core\Command;
use Core\CommandHandler;
use Core\CommandResponse;
use Domain\Fleet\FleetRepository;

class CreateFleetCommandHandler implements CommandHandler
{
    public $repository;
    public function __construct(FleetRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(Command $command): CommandResponse
    {
        $fleetId = $this->repository->createFleet($command->userId);
        return new CommandResponse($fleetId);
    }
}
