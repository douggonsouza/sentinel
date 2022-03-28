<?php

namespace douggonsouza\sentinel;

interface sentinelInterface
{
    /**
     * Inlcui classe na observação
     *
     * @param string $title
     * @param observersInterface $class
     * 
     * @return void
     * 
     */
    public static function add(string $title, observersInterface $class);

    /**
     * Exclui classe da observação
     *
     * @param string $title
     * @param observersInterface $class
     * 
     * @return void
     * 
     */
    public static function del(string $title, observersInterface $class);

    /**
     * Notifica os objetos
     *
     * @param string $title
     * @param propertysInterface|null $propertys
     * 
     * @return void
     * 
     */
    public function transmit(string $title,propertysInterface $propertys = null);
}
?>