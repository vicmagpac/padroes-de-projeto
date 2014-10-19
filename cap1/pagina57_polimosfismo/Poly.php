<?php

Interface ISpeed 
{
    function fast();
    function cruise();
    function slow();
}

class Jet implements ISpeed
{
    function slow()
    {
        return 120;
    }
    
    function cruise() 
    {
        return 1200;
    }
    
    function fast()
    {
        return 1500;
    }
}

class Car implements ISpeed
{
    function slow()
    {
        return 15;
    }
    
    function cruise()
    {
        return 65;
    }
    
    function fast()
    {
        return 110;
    }
}

$f22 = new Jet();
$jetSlow = $f22->slow();
$jetCruise = $f22->cruise();
$jetFast = $f22->fast();

$ford = new Car();
$fordSlow = $ford->slow();
$fordCruise = $ford->cruise();
$fordFast = $ford->fast();

echo "My jet can take off at $jetSlow mph and cruises at $jetCruise mph. however, I can crank it up $jetFast to mph if I'm in hurry \n";
echo "My car pokes along at $fordSlow mph in a school zone and cruises at $fordCruise mph on the highway. However, i can crank it up to $fordFast mph if i'm in a hurry.";