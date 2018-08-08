<?php

namespace entity;

abstract class duck {

    protected $color;

    protected $flybehaviour;

    public function __construct()
    {

    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function dofly() {
        $this->flybehaviour->fly();
    }


}

?>