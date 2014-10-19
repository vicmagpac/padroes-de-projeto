<?php

require_once './NorthRegion.php';
require_once './WestRegion.php';
require_once './SouthRegion.php';

class Client
{
    public function __construct()
    {
        $north = new NorthRegion();
        $west = new WestRegion();
        $south = new SouthRegion();
        $this->showInterface($north);
        $this->showInterface($west);
        $this->showInterface($south);
    }
    
    private function showInterface(IAbstract $region)
    {
        echo $region->displayNow() . "\n";
    }
}

$worker = new Client();