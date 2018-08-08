<?php

namespace entity\flybehaviours;

use entity\interfaces\flybehaviour;

class flying implements flybehaviour {

    public function fly() {
        echo 'yes';
    }
}