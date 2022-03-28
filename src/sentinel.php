<?php

namespace douggonsouza\sentinel;

use douggonsouza\sentinel\sentinelInterface;
use douggonsouza\sentinel\observersInterface;

abstract class sentinel implements sentinelInterface
{
    private $observers = array();
    
    /**
     * Inlcui classe na observação
     *
     * @param observersInterface $class
     * 
     * @return void
     * 
     */
    public function add(string $title, observersInterface $class)
    {
        $this->setObservers($title, $class);
    }
 

    /**
     * Exclui classe da observação
     *
     * @param observersInterface $class
     * 
     * @return void
     * 
     */
    public function del(string $title, observersInterface $class)
    {
        foreach ($this->observers[$title] as $key => $obj){
            if ($obj == $class){
                unset($this->observers[$title][$key]);
            }
        }
    }

    /**
     * Notifica os objetos
     *
     * @return void
     * 
     */
    public function notify(string $title)
    {
        foreach ($this->_class[$title] as $class){
            $class->update($this);
        }
    }

    /**
     * Get the value of observers
     */ 
    public function getObservers(string $title)
    {
        if(isset($title) && !empty($title)){
            return $this->observers[$title];
        }

        return;
    }

    /**
     * Set the value of observers
     *
     * @return  self
     */ 
    public function setObservers(string $title, observersInterface $observers)
    {
        if(isset($title) && !empty($title) && isset($observers) && !empty($observers)){
            $this->observers[$title] = $observers;
        }

        return $this;
    }
}
?>