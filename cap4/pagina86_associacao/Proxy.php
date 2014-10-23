<?php

class Proxy extends ISubject
{
    private $realSubject;
    
    protected function request()
    {
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }
    
    public function login($un, $pw)
    {
        if ($un === "professional" && $pw === "acp") {
            $this->request();
        } else {
            print "Cry 'Havoc,' and let slip the dogd of war!";
        }
    }
}