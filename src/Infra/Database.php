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
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            plateNumber INTEGER NOT NULL,
            localisation TEXT NOT NULL,
            fleetId INTEGER NOT NULL
        )');
        // creation une table de jointure entre vehicule et fleet
        $this->db->exec('CREATE TABLE IF NOT EXISTS fleet_vehicule (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            vehiculeId INTEGER NOT NULL,
            fleetId INTEGER NOT NULL,
            FOREIGN KEY (vehiculeId) REFERENCES vehicule(id),
            FOREIGN KEY (fleetId) REFERENCES fleet(id)
        )');
    }

    function createFleet(int $userId): int
    {
        $this->db->exec("INSERT INTO fleet (userId) VALUES ($userId)");
        return $this->db->lastInsertRowID();
    }

    function createVehicule(int $plateNumber, string $localisation): int
    {
        $this->db->exec("INSERT INTO vehicule (plateNumber, localisation) VALUES ($plateNumber, '$localisation')");
        return $this->db->lastInsertRowID();
    }

    function getFleet(int $fleetId): array
    {
        $result = $this->db->query("SELECT * FROM fleet WHERE id = $fleetId");
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    // add vehicule to fleet
    function addVehiculeToFleet(int $vehiculeId, int $fleetId)
    {
        $this->db->exec("INSERT INTO fleet_vehicule (vehiculeId, fleetId) VALUES ($vehiculeId, $fleetId)");
        return $this->db->lastInsertRowID();
    }

    // get vehicule from fleet
    function getVehiculeFromFleet(int $fleetId): array
    {
        $result = $this->db->query("SELECT * FROM fleet_vehicule WHERE fleetId = $fleetId");
        return $result->fetchArray(SQLITE3_ASSOC);
    }

    //set vehicule localisation
    function setVehiculeLocalisation(int $vehiculeId, string $localisation)
    {
        $this->db->exec("UPDATE vehicule SET localisation = '$localisation' WHERE id = $vehiculeId");
    }
}
