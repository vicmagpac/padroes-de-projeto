<?php

require_once 'IMethodHolder.php';

class ImplementAlpha implements IMethodHolder
{
    public function getInfo($info) 
    {
        echo "This is NEWS! " . $info . "</br>"; 
    }
    
    public function sendInfo($info)
    {
        return $info;
    }
    
    public function calculate($first, $second)
    {
        $calculated = $first * $second;
        return $calculated;
    }
    
    public function useMethods()
    {
        $this->getInfo("The sky is falling....");
        echo $this->sendInfo("Passando valor para sendInfo");
        echo "Você tem $" . $this->calculate(20, 15) . " no seu part-time";
    }
}

$worker = new ImplementAlpha();
$worker->useMethods();