<?php

require_once "Infra/Database.php";

const DATABASE_FILENAME = 'db.sqlite';
$db = new Database(DATABASE_FILENAME);
