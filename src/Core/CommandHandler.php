<?php

namespace Core;

use Database;

interface CommandHandler
{
    public function handle(Command $command): CommandResponse;
}
