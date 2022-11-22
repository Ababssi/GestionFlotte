#!/usr/bin/env php
<?php
print_r($argv[1]);
echo "\n";
die();


require_once "autoload.php";


use Infra\FleetDoctrineRepository;
use App\Registration\Command\RegisterVehiculeCommand;
use App\Registration\Command\RegisterVehiculeCommandHandler;
use App\Park\Command\ParkVehiculeCommand;
use App\Park\Command\ParkVehiculeCommandHandler;

$repo = new FleetDoctrineRepository();
$handler1 = new RegisterVehiculeCommandHandler($repo);
$response1 = $handler1->handle(new RegisterVehiculeCommand('2', '1'));

$handler2 = new ParkVehiculeCommandHandler($repo);
$response2 = $handler2->handle(new ParkVehiculeCommand('2', '1', 'doha'));

echo $response1->getMessage();
echo "\n";
echo $response2->getMessage();
