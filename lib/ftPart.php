<?php

require_once('ftTableBase.php');

/**
 * Repräsentiert die Tabelle Part.
 */
class ftPart extends ftTableBase {
    private const TABLENAME = 'Part';

    public function Test()
    {
        echo $this->db->stat() . '<p>';
    }

    public function Create(array $data)
    {
        [$partNo, $description, $comment, $price] = $data;
        //string $sql = "CALL ";
    }

    public function Read(int $id)
    {
        
    }

    public function Update(int $id, array $data)
    {
        [$partNo, $description, $comment, $price] = $data;
    }

    public function Delete(int $id)
    {

    }
}
?>