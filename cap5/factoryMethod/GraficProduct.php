<?php

require_once './Product.php';

class GraficProduct implements Product
{
    private $mfgProduct;
    
    public function getProperties() 
    {
        $this->mfgProduct = "This is grafic <3";
        return $this->mfgProduct;
    }
}