<?php
namespace App\Repository;


use SimpleXMLElement;

class DataAdapter
{
    private $json;

    public function __construct(Json $json_in)
    {
        $this->json = $json_in;
    }

    public function jsonToXML()
    {
        $xml = new SimpleXMLElement('<result/>');
        return $this->ArrayToXML($this->jsonDecode($this->json->getJson()), $xml);
    }

    private function jsonDecode(string $json)
    {
        return json_decode($json, true);
    }

    private function ArrayToXML($array, $xml)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $this->ArrayToXML($value, $xml->addChild($key));
            } else {
                $xml->addChild($key, $value);
            }
        }
        return $xml->asXML();
    }
}
