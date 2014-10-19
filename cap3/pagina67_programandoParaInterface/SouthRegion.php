<?php

require_once './IAbstract.php';

class SouthRegion extends IAbstract
{
    protected function giveCost() 
    {
        return 25;
    }
    
    protected function giveCity()
    {
        return "Santa Catarina";
    }
}