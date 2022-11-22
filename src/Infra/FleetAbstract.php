<?php



abstract class FleetAbstract
{
    public function __construct()
    {
        $this->db = new Database(DATABASE_FILENAME);
    }
}
