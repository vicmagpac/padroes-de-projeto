<?php

/**
 * Entendendo a matriz de objetos
 */
class Customer
{
    public $items = array();
}

$customer = new Customer();
foreach ($customer->items as $item) {
    // o problema é que quando faço isso, a propriedade de $items ficará pública.
    echo $item->name;
}