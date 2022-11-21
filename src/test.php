<?php
require_once "autoload.php";

use Core\CommandResponse;
use Infra\FleetDoctrineRepository;
use App\Registration\Command\RegisterVehiculeCommand;
use App\Registration\Command\RegisterVehiculeCommandHandler;

$repo = new FleetDoctrineRepository();
$handler = new RegisterVehiculeCommandHandler($repo);
$response = $handler->handle(new RegisterVehiculeCommand('2', '1'));
echo $response->getMessage();
