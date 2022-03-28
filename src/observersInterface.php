<?php

namespace douggonsouza\sentinel;

use douggonsouza\propertys\propertysInterface;

interface observersInterface
{
    /**
     * Executa o comportamento do obsever
     *
     * @param propertysInterface|null $propertys
     * 
     * @return void
     * 
     */
    public function behavior(propertysInterface $propertys = null);
}
?>