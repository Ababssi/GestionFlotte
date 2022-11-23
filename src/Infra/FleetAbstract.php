<?php

require_once "Infra/Database.php";
abstract class FleetAbstract
{
    const DATABASE_FILENAME = 'db.sqlite';

    public function __construct()
    {
        $this->db = new Database(self::DATABASE_FILENAME);
        $this->db->initialize();
    }
}
