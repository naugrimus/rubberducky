<?php

namespace entity;

use entity\flybehaviours\nofly;

class rubberducky extends duck {

    public function __construct()
    {
        $this->flybehaviour = new nofly();

    }


}
