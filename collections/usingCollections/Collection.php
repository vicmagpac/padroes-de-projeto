<?php

class Collection
{
    private $items = array();
    
    public function addItem($object, $key = null)
    {
        if ($key == null) {
            
            $this->items[] = $object;
            
        } else {
            
            if (isset($this->items[$key])) {
                throw new Exception("Key $key already in use.");
            } else {
                $this->items[$key] = $object;
            }
        }
    }
    
    public function deleteItem($key)
    {
        if (isset($this->items[$key])) {
            
            unset($this->items[$key]);
        
            
        } else {
            throw new Exception("Invalid key $key");
        }
    }
    
    public function getItem($key)
    {
        if (isset($this->items[$key])) {
            return $this->items[$key];
        } else {
            throw new Exception("Invalid key $key");
        }
    }
    
    /**
         * 
         * Retornando todas as chaves da nossa collection           
         * @return type
         */
    public function keys()
    {
        return array_keys($this->items);
    }
    
    /**
         * 
         * Retorna o tamanho da matriz 
         * @return Integer
         */
    public function length()
    {
        return count($this->items);
    }
    
    /**
         * Verifica se uma chave existe
         * @param Integer $key
         * @return Boolean
         */
    public function keyExists($key)
    {
        return isset($this->items[$key]);
    }
}