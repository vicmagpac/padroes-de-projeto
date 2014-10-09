<?php

require_once './Collection.php';

class Box
{
    private $number;
    private $name;
    
    public function __construct($name, $number) 
    {
        $this->name = $name;
        $this->number = $number;
    }
    
    public function __toString() {
        return $this->name . " is number " . $this->number;
    }
}

// TESTANDO A COLLECTION
$col = new Collection();
$col->addItem(new Box("Victor", 23), "victor");
$col->addItem(new Box("Magalhães", 46), "mag");
$col->addItem(new Box("Pacheco", 69), "pac");

$col->deleteItem("mag");

try {
    echo "Exists {$col->length()} objects in collection";
} catch (Exception $ex) {
    print "The collection doesn't contain victor'";
}
