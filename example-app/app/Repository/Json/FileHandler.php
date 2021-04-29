<?php

namespace App\Repository;

class FileHandler
{
    private const XML_FILE = 'Result.xml';
    public function WriteToXMLFile($xml)
    {
        file_put_contents(self::XML_FILE, $xml);
    }
}

