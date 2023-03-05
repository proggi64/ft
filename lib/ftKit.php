<?php

class ftKit extends ftTableBase {
    private const TABLENAME = 'Kit';

    public function Create(array $data)
    {
        [$partNo, $description, $price, $comment, $firstYear, $lastYear] = $data;
        //string $sql = "CALL ";
    }

    public function Read(int $id)
    {
        
    }

    public function Update(int $id, array $data)
    {
        [$partNo, $description, $price, $comment, $firstYear, $lastYear] = $data;
    }

    public function Delete(int $id)
    {

    }
}

?>