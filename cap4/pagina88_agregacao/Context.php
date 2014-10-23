<?php
require_once './IStrategy.php';

class Context
{
    private $strategy;
    
    public function __construct(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
    
    public function algorithm($elements) 
    {
        $this->strategy->algorithm($elements);
    }
}

