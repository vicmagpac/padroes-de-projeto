<?php

require_once 'OneTrickAbstract.php';

class OneTrickConcrete extends OneTrickAbstract
{
    public function trick($whatever)
    {
        $this->storeHere = $whatever;
        return $this->storeHere;
    }
}

$worker = new OneTrickConcrete();
echo $worker->trick("From an abstract origin...");