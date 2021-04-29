<?php

namespace App\Http\Controllers;

use App\Repository\Json;
use App\Repository\DataAdapter;
use App\Repository\FileHandler;
use Illuminate\Http\Request;

class AdapterController extends Controller
{
    public function index()
    {
        $json = new Json('{"China":["Guangzhou","Fuzhou","Beijing"]}');
        $jsonAdapter = new DataAdapter($json);
        $xml = $jsonAdapter->jsonToXML();
        (new FileHandler)->WriteToXMLFile($xml);
    }
}
