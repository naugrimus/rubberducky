<?php

namespace entity\flybehaviours;

use entity\interfaces\flybehaviour;

class nofly implements flybehaviour {

    public function fly() {
        echo 'no';
    }
}