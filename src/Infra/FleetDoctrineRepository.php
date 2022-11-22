<?php

namespace Infra;


use Domain\Fleet\Fleet;
use Domain\Fleet\Vehicule;
use Database;
use Domain\Fleet\FleetRepository;
use FleetAbstract;

class FleetDoctrineRepository extends FleetAbstract implements FleetRepository
{


    public function isVehiculeOnFleet($vehiclePlateNumber, $fleetId): bool
    {
        // getFleet
        // pour chaque véhicule de la flotte est ce que le numéro de plaque correspond
        // si oui return true
        // sinon return false
        // $db->getFleet($fleetId);

        $fleet = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        if (in_array($vehiclePlateNumber, $fleet)) {
            return true;
        }
        return false;
    }

    public function addVehicule($vehiclePlateNumber, $fleetId): array
    {
        // getFleet
        // ajouter le véhicule à la flotte
        // return ok 
        $fleet = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $fleet[] = $vehiclePlateNumber;
        return $fleet;
    }

    public function isVehiculePark(int $vehiclePlateNumber): bool
    {
        // getVehicule
        // si le véhicule est dans un parking return true
        // sinon return false

        $vehiclePlateNumber = 1;
        $park = [
            'marseille', 'paris', 'lyon', 'toulouse', 'nice',
            'nantes', 'montpellier', 'strasbourg', 'bordeaux', 'lille'
        ];
        if (in_array($vehiclePlateNumber, $park)) {
            return true;
        }
        return false;
    }

    public function parkVehicule(int $vehiclePlateNumber)
    {
        // getVehicule
        // ajouter la localisation du véhicule
        // return ok

        $park = [
            'marseille', 'paris', 'lyon', 'toulouse', 'nice',
            'nantes', 'montpellier', 'strasbourg', 'bordeaux', 'lille'
        ];
        $park[] = $vehiclePlateNumber;
        return $park;
    }

    public function createFleet(int $user)
    {
        return $this->db->createFleet($user);
    }
}
