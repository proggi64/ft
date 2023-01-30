<?php

/**
 * Grundlegende Funktionalität aller Tabellenklassen.
 */
abstract class ftTableBase {
    protected mysqli $db;

    public function __construct(mysqli $database) {
        $this->db = $database;
    }

    abstract public function Create(array $data);
    abstract public function Read(int $id);
    abstract public function Update(int $id, array $data);
    abstract public function Delete(int $id);
}

?>