<?php

require_once './DoMath.php';

class InheritMath extends DoMath
{
    private $textOut;
    private $fullFace;
    
    public function numToText($num)
    {
        $this->textOut = (string)$num;
        return $this->textOut;
    }
    
    public function addToFace($face, $msg)
    {
        $this->fullFace = "<strong>" . $face . "</strong>: " . $msg;
        return $this->fullFace;
    }
}