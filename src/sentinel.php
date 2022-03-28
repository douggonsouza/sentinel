<?php

namespace douggonsouza\sentinel;

use douggonsouza\propertys\propertysInterface;
use douggonsouza\sentinel\sentinelInterface;
use douggonsouza\sentinel\observersInterface;

abstract class sentinel implements sentinelInterface
{
    private static $observers = array();
    private static $propertys;

    /**
     * Inlcui classe na observação
     *
     * @param string $title
     * @param observersInterface $class
     * 
     * @return void
     * 
     */
    public static function add(string $title, observersInterface $class)
    {
        self::setObservers($title, $class);
    }

    /**
     * Exclui classe da observação
     *
     * @param string $title
     * @param observersInterface $class
     * 
     * @return void
     * 
     */
    public static function del(string $title, observersInterface $class)
    {
        foreach (self::$observers[$title] as $key => $obj){
            if($obj == $class){
                unset(self::$observers[$title][$key]);
            }
        }
    }

    /**
     * Notifica os objetos
     *
     * @param string $title
     * @param propertysInterface|null $propertys
     * 
     * @return void
     * 
     */
    public function transmit(string $title,propertysInterface $propertys = null)
    {
        self::$propertys = null;
        $this->setPropertys($propertys);

        foreach (self::$observers[$title] as $observers){
            try{
                $observers->behavior($this->getPropertys());
            }catch(\Exception $e){
                continue;
            }
        }
    }

    /**
     * Get the value of observers
     */ 
    public function getObservers(string $title)
    {
        if(isset($title) && !empty($title) && array_key_exists($title, self::$observers)){
            return self::$observers[$title];
        }

        return null;
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

    /**
     * Get the value of propertys
     */ 
    private function getPropertys()
    {
        return self::$propertys;
    }

    /**
     * Set the value of propertys
     *
     * @return  self
     */ 
    private function setPropertys($propertys)
    {
        self::$propertys = $propertys;

        return $this;
    }
}
?>