<?php

/**
 * Grundlegende Funktionalität aller Tabellenklassen.
 */
class ftTableBase {
    protected mysqli $db;

    public function __construct(mysqli $database) {
        $this->db = $database;
    }
}

?>