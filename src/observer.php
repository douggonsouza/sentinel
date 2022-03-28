<?php

namespace douggonsouza\sentinel;

use douggonsouza\sentinel\observersInterface;
use douggonsouza\propertys\propertysInterface;

class observer implements observersInterface
{
    
    /**
     * Executa o comportamento do obsever
     *
     * @param propertysInterface|null $propertys
     * 
     * @return void
     * 
     */
    public function behavior(propertysInterface $propertys = null)
    {
        
    }
}
?>