<?php

require_once './IAbstract.php';

class NorthRegion extends IAbstract
{
    // deve retornar um valor decimal
    protected function giveCost() 
    {
        return 210.54;
    }
    
    protected function giveCity() 
    {
        return "Mose Breath";
    }
}