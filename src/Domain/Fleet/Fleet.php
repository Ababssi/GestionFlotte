<?php

namespace Domain\Fleet;

class Fleet
{
    private $id;
    private $userId;

    public function __construct()
    {
    }

    // getter et setter
    public function getId(): int
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
    public function setUserId(int $userId)
    {
        $this->userId = $userId;
    }
}
