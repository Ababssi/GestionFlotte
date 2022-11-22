<?php

require_once "Core/Command.php";
require_once "Core/CommandResponse.php";
require_once "Core/CommandHandler.php";

require_once "App/Registration/Command/RegisterVehiculeCommand.php";
require_once "App/Registration/Command/RegisterVehiculeCommandHandler.php";

require_once "App/Park/Command/ParkVehiculeCommand.php";
require_once "App/Park/Command/ParkVehiculeCommandHandler.php";



require_once "Domain/Fleet/FleetRepository.php";
require_once "Infra/FleetDoctrineRepository.php";
