<?php

/**
 * Repräsentiert die Fischertechnik-Datenbank auf dem Server.
 */
class ftDatabase extends mysqli
{
    private const HOST = 'localhost';
    private const USERNAME = 'ftApp';
    private const PASSWORD = 'aX8)gp[sRP';
    private const NAME = 'Fischertechnik';

    /**
     * Konstruktor der Klasse ftDatabase.
     */
    function __construct()
    {
        parent::__construct(self::HOST, self::USERNAME, self::PASSWORD, self::NAME);
    }
}
?>