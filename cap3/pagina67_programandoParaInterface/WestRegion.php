<?php

require_once './IAbstract.php';

class WestRegion extends IAbstract
{
    // deve retornar um valor decimal
    protected function giveCost()
    {
        $solarSaving = 2;
        $this->valueNow = 210.54 / $solarSaving;
        return $this->valueNow;
    }
    
    protected function giveCity() 
    {
        return "Rattlesnake Gulch";
    }
}
