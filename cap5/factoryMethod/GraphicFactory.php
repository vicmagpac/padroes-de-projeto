<?php

require_once 'Creator.php';
require_once './GraficProduct.php';

class GraficFactory extends Creator
{
    protected function factoryMethod() 
    {
        $product = new GraficProduct();
        return $product->getProperties();
    }
}