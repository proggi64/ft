<?php

class ftDatabase extends mysqli
{
    function __construct()
    {
        parent::__construct('localhost', 'ftApp', 'aX8)gp[sRP', 'Fischertechnik');
    }
}
?>