<?php

abstract class IAbstract
{
    // proprieade disponivel a todas implementações
    protected $valueNow;
    
    // todas as implementações devem incluir os 2 métodos a seguir
    // Deve retornar um valor decimal
    abstract protected function giveCost();
    
    //deve retornar uma string
    abstract protected function giveCity();
    
    // esta função concreta está disponivel a todas as implementações da classe sem sobrescrita do conteúdo
    public function displayNow()
    {
        $stringCost = $this->giveCost();
        $stringCost = (string) $stringCost;
        $allTogether = ("Cost: $" . $stringCost . " for " . $this->giveCity());
        return $allTogether;
    }
}