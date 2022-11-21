<?php

namespace Core;

interface CommandHandler
{
    public function handle(Command $command): CommandResponse;
}
