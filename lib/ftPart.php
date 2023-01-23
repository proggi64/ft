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
}
?>