<?php

namespace App\Create\Command;

use Core\Command;

class CreateFleetCommand implements Command
{
    public $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }
}
