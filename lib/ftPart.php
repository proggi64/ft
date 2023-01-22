<?php

class ftPart {
    private mysqli $db;

    public function __construct(mysqli $database) {
        $this->db = $database;
    }
}
?>