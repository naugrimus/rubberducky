<?php

namespace entity;

use entity\flybehaviours\flying;

 class wildduck extends duck {

     public function __construct()
     {
        $this->flybehaviour = new flying();

     }


 }
