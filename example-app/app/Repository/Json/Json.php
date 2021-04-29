<?php
namespace App\Repository;

class Json
{
    private $json;

    public function __construct($json)
    {
        $this->json=$json;
    }

    public function getJson()
    {
        return $this->json;
    }
}
