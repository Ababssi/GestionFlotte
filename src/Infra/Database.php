<?php

class Database
{
    private SQLite3 $db;
    public function __construct(string $filname)
    {
        $this->db = new SQLite3($filname);
    }
    function initialize()
    {
        $this->db->exec('CREATE TABLE IF NOT EXISTS fleet (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            userId INTEGER NOT NULL
        )');
        $this->db->exec('CREATE TABLE IF NOT EXISTS vehicule (
            plateNumber TEXT PRIMARY KEY,
            localisation TEXT NULL
        )');

        // table de jointure entre vehicule et fleet car relation n-n
        $this->db->exec('CREATE TABLE IF NOT EXISTS fleet_vehicule (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            vehiclePlateNumber TEXT NOT NULL,
            fleetId INTEGER NOT NULL,
            FOREIGN KEY (fleetId) REFERENCES fleet(id),
            FOREIGN KEY (vehiclePlateNumber) REFERENCES vehicule(plateNumber)
        )');
    }

    function createFleet(int $userId): int
    {
        $this->db->exec("INSERT INTO fleet (userId) VALUES ($userId)");
        return $this->db->lastInsertRowID();
    }

    function createVehicule(string $plateNumber, string $localisation = null): int
    {
        $this->db->exec("INSERT INTO vehicule (plateNumber, localisation) VALUES ('$plateNumber', '$localisation')");
        return $this->db->lastInsertRowID();
    }

    function getFleet(int $fleetId)
    {
        $result = $this->db->query("SELECT * FROM fleet WHERE id = $fleetId");
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    function assignVehiculeToFleet(string $vehiclePlateNumber, int $fleetId)
    {
        $this->db->exec("INSERT INTO fleet_vehicule (vehiclePlateNumber, fleetId) VALUES ('$vehiclePlateNumber', '$fleetId')");
        return $this->db->lastInsertRowID();
    }

    function setVehiculeLocalisation(string $vehiclePlateNumber, string $localisation)
    {
        $this->db->exec("UPDATE vehicule SET localisation = '$localisation' WHERE plateNumber = '$vehiclePlateNumber'");
    }

    function isVehiculeOnFleet(string $vehiclePlateNumber, int $fleetId)
    {
        $result = $this->db->query("SELECT * FROM fleet_vehicule WHERE vehiclePlateNumber = '$vehiclePlateNumber' AND fleetId = '$fleetId'");
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    function isVehiculePark(string $vehiclePlateNumber, string $localisation)
    {
        $result = $this->db->query("SELECT * FROM vehicule WHERE plateNumber = '$vehiclePlateNumber' AND localisation = '$localisation'");
        return $result->fetchArray(SQLITE3_ASSOC);
    }
}
